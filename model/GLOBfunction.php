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

// get single
function get_invoice_by_id ($id) {
   global $pdo;

   $param = [
      'id' => $id
   ];

   $sql = <<<SQL
   SELECT
   	invoices.id AS invoice_id,
      invoices.number,
      invoices.date,  
      invoices.company,    
      company.company_name, 
      invoices.company_type,
      type.company_type,    
      invoices.contact,
      concat(contacts.first_name, ' ', contacts.last_name) AS contacts_full_name     
   FROM invoices
   JOIN company
      ON invoices.company = company.id      
   JOIN type
   	ON invoices.company_type = type.id     
   JOIN contacts
   	ON invoices.contact = contacts.id
   WHERE invoices.id = :id
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
   $data = $stmt->fetch(); 

   return $data;
}


function get_company_by_id ($id) {
   global $pdo;

   $param = [
      'id' => $id
   ];

   $sql = <<<SQL
   SELECT
      company.id AS company_id,
      company_name,
      VAT,
      company.type_id,
      country,
      company_type AS type, 
      type.id 
   FROM company 
   JOIN type
      ON company.type_id = type.id
   WHERE company.id = :id
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
   $data = $stmt->fetch(); 

   return $data;
}


function get_contact_by_id ($id) {
   global $pdo;

   $param = [
      'id' => $id
   ];

   $sql = <<<SQL
   SELECT
      contacts.id AS contact_id,
      first_name,
      last_name,
      concat(first_name, ' ', last_name) AS full_name,
      mail,
      phone,
      contacts.company,
      company.id,
      company_name
   FROM contacts
   JOIN company
      ON contacts.company = company.id
   WHERE contacts.id = :id
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
   $data = $stmt->fetch(); 

   return $data;
}

// get multiple
function get_many_invoices($limit = null) {
   global $pdo;

   $sql = <<<SQL
   SELECT
      invoices.id AS invoice_id,
      invoices.number,
      invoices.date,  
      invoices.company,    
      company.company_name, 
      invoices.company_type,
      type.company_type,    
      invoices.contact,
      concat(contacts.first_name, ' ', contacts.last_name) AS contacts_full_name     
   FROM invoices
   JOIN company
      ON invoices.company = company.id      
   JOIN type
      ON invoices.company_type = type.id     
   JOIN contacts
      ON invoices.contact = contacts.id
   ORDER BY invoices.id DESC
SQL;

   $stmt = $pdo->prepare($sql);      

   $stmt->execute();

   $all_data = [];
   $count = 0;

   while ($data = $stmt->fetch()) {
      if ($limit AND $count === (int)$limit) break;
      $all_data[] = $data;
      $count++;
   }

   return array_reverse($all_data);
}


function get_many_contacts($limit = null) {
   global $pdo;

   $sql = <<<SQL
   SELECT
      contacts.id AS contact_id,
      concat(first_name, Last_name) AS full_name,
      mail,
      phone,
      contacts.company,
      company.id,
      company_name
   FROM contacts
   JOIN company
      ON contacts.company = company.id
   ORDER BY contacts.id DESC
SQL;

   $stmt = $pdo->prepare($sql);      

   $stmt->execute();

   $all_data = [];
   $count = 0;

   while ($data = $stmt->fetch()) {
      if ($limit AND $count === (int)$limit) break;
      $all_data[] = $data;
      $count++;
   }

   return array_reverse($all_data);
}


function get_many_companies($limit = null) {
   global $pdo;

   $sql = <<<SQL
   SELECT
      company.id AS company_id,
      company_name,
      VAT,
      company.type_id,
      country,
      company_type AS type, 
      type.id 
   FROM company 
   JOIN type
      ON company.type_id = type.id
   ORDER BY company.id DESC
SQL;

   $stmt = $pdo->prepare($sql);      

   $stmt->execute();

   $all_data = [];
   $count = 0;

   while ($data = $stmt->fetch()) {
      if ($limit AND $count === (int)$limit) break;
      $all_data[] = $data;
      $count++;
   }

   return array_reverse($all_data);
}

function get_all_types() {
   global $pdo;

   $sql = <<<SQL
   SELECT *
   FROM type
SQL;

   $stmt = $pdo->prepare($sql);      
   $stmt->execute();

   $all_data = $stmt->fetchAll();
   return $all_data;
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

   $sql = <<<SQL
   INSERT INTO company (company_name, VAT, country, type_id) 
   VALUE (:name, :vat, :country, :type)
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
}


function create_invoices (string $number, $company, $company_type, $contact): void {
   global $pdo;

   $param = [
      'number' => $number,
      'company' => $company,
      'company_type' => $company_type,
      'contact' => $contact
   ];

   $sql = <<<SQL
   INSERT INTO invoices (number, company, company_type, contact) 
   VALUE (:number, :company, :company_type, :contact)
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
}


function create_contact (string $first_name, string $last_name, string $email, $company, $phone): void {
   global $pdo;

   $param = [
      'first_name' => $first_name,
      'last_name' => $last_name,
      'mail' => $email,
      'company' => $company,
      'phone' => $phone
   ];

   $sql = <<<SQL
   INSERT INTO contacts (first_name, last_name, mail, company, phone) 
   VALUE (:first_name, :last_name, :mail, :company, :phone)
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
}

/* PUT */

function update_invoice ($id, string $number, $company, $company_type, $contact): void {
   global $pdo;

   $param = [
      'number' => $number,
      'company' => $company,
      'company_type' => $company_type,
      'contact' => $contact,
      'id' => $id
   ];

   $sql = <<<SQL
   UPDATE invoices
   SET 
      number = :number, 
      company = :company,
      company_type = :company_type,
      contact = :contact
   WHERE id = :id
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
}


function update_company ($id, string $name, string $vat, string $country, $type): void {
   global $pdo;

   $param = [
      'name' => $name,
      'vat' => $vat,
      'country' => $country,
      'type' => $type,
      'id' => $id
   ];

   $sql = <<<SQL
   UPDATE company
   SET 
      name = :name, 
      vat = :vat,
      country = :country,
      type = :type
   WHERE id = :id
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
}


function update_contact ($id, string $first_name, string $last_name, string $email, $company, $phone): void {
   global $pdo;

   $param = [
      'first_name' => $first_name,
      'last_name' => $last_name,
      'mail' => $email,
      'company' => $company,
      'phone' => $phone,
      'id' => $id
   ];

   $sql = <<<SQL
   UPDATE invoices
   SET 
      first_name = :first_name, 
      last_name = :last_name,
      email = :email,
      company = :company,
      phone = :phone
   WHERE id = :id
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
}

/* DELETE */

function delete_row($table, $id) {
   global $pdo;

   $param = [
      'id' => $id
   ];

   $sql = <<<SQL
   DELETE FROM $table
   WHERE id = :id
SQL;

   $stmt = $pdo->prepare($sql);      
   $stmt->execute($param);
}

//> Utility </////////////////////////////////

function is_selected ($operator1, $operator2) {
   return $operator1 === $operator2 ? 'selected' : '';
}

function dump($var) {
   echo '<pre>';
   var_dump($var);
   echo '</pre>';
}
?>