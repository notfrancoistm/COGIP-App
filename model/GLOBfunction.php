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
         $limit = is_int($limit) ? (string)$limit : $limit;     
         $stmt = $pdo->prepare("SELECT * FROM $table ORDER BY id DESC LIMIT $limit");
      }
      else {
         $stmt = $pdo->prepare("SELECT * FROM $table ORDER BY id DESC");      
      }

      $stmt->execute();
      $data = $stmt->fetchAll();

      return array_reverse($data);
   }



   function get_by_foreign_key (string $table, string $foreign_key, $id): array {
      global $pdo;
   
      $stmt = $pdo->prepare("SELECT * FROM $table WHERE $foreign_key = $id");      
   
      $stmt->execute();
      $data = $stmt->fetchAll();
   
      return $data;
   }

   /* POST */

   function create_company(string $name, string $vat, string $country, $type): void {
      global $pdo;

      $param = [
         'name' => $name,
         'vat' => $vat,
         'country' => $country,
         'type' => $type
      ];

      $stmt = $pdo->prepare('INSERT INTO company(company_name, VAT, country, type) VALUE (:name, :vat, :country, :type)');
      $stmt->execute($param);
   }


   function create_contact(string $name, string $vat, string $country, $type): void {
      global $pdo;

      $param = [
         'name' => $name,
         'vat' => $vat,
         'country' => $country,
         'type' => $type
      ];

      $stmt = $pdo->prepare('INSERT INTO company(company_name, VAT, country, type) VALUE (:name, :vat, :country, :type)');
      $stmt->execute($param);
   }

   /* PUT */

   /* DELETE */
?>