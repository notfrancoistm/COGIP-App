<?php

//> Validation </////////////////////////////////

function login_validation (string $input = ''): bool {
   $pattern = '/^[a-zA-Z0-9_-]{3,50}$/';
   return preg_match($pattern, trim($input)) ? true : false;
}

function password_validation (string $input = ''): bool {
   $pattern = '/^[\S]{3,50}$/';
   return preg_match($pattern, trim($input)) ? true : false;
}

//> SQL Queries </////////////////////////////////

function get_user (string $login) {
   global $pdo;

   $param = [
      'login' => trim(strtolower($login))
   ];

   $stmt = $pdo->prepare("SELECT login, password, rights FROM users WHERE login=:login");
   $stmt->execute($param);

   $data = $stmt->fetch();

   return $data;
}

// validation

function authentification () {
   global $error;

   if (!preg_match('/modo|god/', $_SESSION['rights']) && $_POST['submit'] === 'Login') {

      $login = $_POST['username'] ?? '';
      $password = $_POST['password'] ?? '';

      $username_val = login_validation($login);
      $password_val = password_validation($password);

      // validation input
      if ($username_val AND $password_val) {
         $user_data = get_user($login);
      }
      else {
         $error['session'] = "Error - Invalid password or username";
         return;
      }

      // if user exist verify password
      if ($user_data) {
         $hash = $user_data['password'];
         $pass_is_correct = password_verify($password, $hash);
      }
      else{
         $error['session'] = "Error 403 - Forbidden access, requires authorization";
         return;
      } 

      // if password is correct set $_SESSION['rights'] to user rights
      if ($pass_is_correct) {
         $_SESSION['rights'] = $user_data['rights'];
      }
      else {
         $error['session'] = "Error 403 - Forbidden access, requires authorization";
         return;
      }

      // unset form data
      unset($_POST['username']);
      unset($_POST['password']);
   }
}
?>