<?php
   //> Validation </////////////////////////////////

   /* User input */

   function string_validation (string $input = ''): bool {
      $pattern = '/^[a-zA-Z ]{3,50}$/';
      return preg_match($pattern, trim($input)) ? true : false;
   }

   function country_validation (string $input = ''): bool {
      $pattern = '/^[A-Z]{2} ?0[0-9]{3} ?[0-9]{3} ?[0-9]{3}$/';
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

   function id_validation (string $input = ''): bool {
      $pattern = '/^[1-9][0-9]{0,50}$/';
      return preg_match($pattern, trim($input)) ? true : false;
   }

   function table_validation (string $table_to_validat): bool {
      global $pdo;
      $table_to_validat = trim(strtolower($table_to_validat));

      $stmt = $pdo->query("SHOW TABLES");

      $all_tables = [];
      while ($row = $stmt->fetch()) {
         $all_tables[] = $row['Tables_in_cogip'];
      }

      $result = false;

      foreach($all_tables as $table_name) {
         if ($table_to_validat === $table_name) $result = true;
      }

      return $result;
   }

   //> SQL Queries </////////////////////////////////

   /* GET */

   function get_by_id (string $table, $id): array {
      global $pdo;

      $param = [
         'id' => is_int($id) ? (string)$id : $id
      ];

      $stmt = $pdo->prepare("SELECT * FROM $table WHERE id=:id");
      $stmt->execute($param);
      $data = $stmt->fetch(); 

      return $data;
   }

   function get_many (string $table, $limit = null): array {
      global $pdo;

      if ($limit) {
         $param = [
            'limit' => is_int($limit) ? (string)$limit : $limit
         ];
         
         $stmt = $pdo->prepare("SELECT * FROM $table LIMIT :limit");
         $stmt->execute($param);
      }
      else {
         $stmt = $pdo->prepare("SELECT * FROM $table");
         $stmt->execute();
      }

      $data = $stmt->fetchAll();

      return $data;
   }

   /* POST */

   /* PUT */

   /* DELETE */
?>