<?php

//> Validation </////////////////////////////////

function login_validation (string $input = ''): bool {
   $pattern = '/^[a-zA-Z0-9_]{3,50}$/';
   return preg_match($pattern, trim($input)) ? true : false;
}

function password_validation (string $input = ''): bool {
   $pattern = '/^[\S]{3,50}$/';
   return preg_match($pattern, trim($input)) ? true : false;
}

//> SQL Queries </////////////////////////////////

function get_user (string $login): array {
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
$login = $_POST['username'] ?? '';
$password = $_POST['password'] ?? '';

$username_val = login_validation($login);
$password_val = password_validation($password);


if ($username_val AND $password_val) {

   $user_data = get_user($login);

   $hash = $user_data['password'];

   $_SESSION['rights'] = $user_data['rights'];

}
else if (empty($_SESSION['rights'])) {
   echo "Error 403 - forbidden l'accès au fichier requiert une autorisation";
}
?>