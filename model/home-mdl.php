<?php
   //> Validation </////////////////////////////////

   function string_validation (string $input = ''): bool {
      $pattern = '/^[a-zA-Z ]{3,50}$/';
      return preg_match($pattern, trim($input)) ? true : false;
   }

   function country_validation (string $input = ''): bool {
      $pattern = '/^[A-Z]{2} ?0[0-9]{3} ?[0-9]{3} ?[0-9]{3}$/';
      return preg_match($pattern, trim($input)) ? true : false;
   }

   function password_validation (string $input = ''): bool {
      $pattern = '/^[\S]{3,50}$/';
      return preg_match($pattern, trim($input)) ? true : false;
   }

   function email_validation (string $input = ''): bool {
      return filter_var(trim($input), FILTER_VALIDATE_EMAIL) ? true : false;
   }

   function phone_validation (string $input = ''): bool {
      $pattern = '/^(\+?)([0-9] ?){9,20}$/';
      return preg_match($pattern, trim($input)) ? true : false;
   }

   function invoice_number_validation (string $input = ''): bool {
      $pattern = '/^[A-Z]{1}[0-9]{8}-[0-9]{3}$/';
      return preg_match($pattern, ucfirst(trim($input))) ? true : false;
   }

   //> SQL Queries </////////////////////////////////

   /* GET */

   function get_company (object $pdo, $id): array {

      if (is_int($id)) $id = (string)$id;

      $param = ['id' => $id];

      $stmt = $pdo->prepare("SELECT * FROM company WHERE id=:id");
      $stmt->execute($param); 
      $user = $stmt->fetch();

      return $user;
   }

   function get_invoice (object $pdo, $id): array {
      if (is_int($id)) $id = (string)$id;

      $param = ['id' => $id];

      $stmt = $pdo->prepare("SELECT * FROM invoices WHERE id=:id");
      $stmt->execute($param); 
      $user = $stmt->fetch();

      return $user;
   }

   function get_contact (object $pdo, $id): array {
      if (is_int($id)) $id = (string)$id;

      $param = ['id' => $id];

      $stmt = $pdo->prepare("SELECT * FROM contacts WHERE id=:id");
      $stmt->execute($param); 
      $user = $stmt->fetch();

      return $user;
   }

   function get_companies (object $pdo, $limit = '5'): array {
      if (is_int($limit)) $limit = (string)$limit;

      $param = ['limit' => $limit];

      $stmt = $pdo->prepare("SELECT * FROM company LIMIT :limit");
      $stmt->execute($param); 
      $user = $stmt->fetchAll();

      return $user;
   }

   function get_invoices (int $limit = 5) {

   }

   function get_contacts (int $limit = 5) {

   }

   /* POST */

   /* PUT */

   /* DELETE */
?>