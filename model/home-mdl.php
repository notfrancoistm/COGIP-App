<?php
require 'model/GLOBfunction.php';

function get_many_invoices($limit = 20) {
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
   LIMIT $limit
SQL;

   $stmt = $pdo->prepare($sql);      

   $stmt->execute();
   $data = $stmt->fetchAll();

   return array_reverse($data);
}


function get_many_contacts($limit = 20) {
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
   LIMIT $limit
SQL;

   $stmt = $pdo->prepare($sql);      

   $stmt->execute();
   $data = $stmt->fetchAll();

   return array_reverse($data);
}


function get_many_companies($limit = 20) {
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
   LIMIT $limit
SQL;

   $stmt = $pdo->prepare($sql);      

   $stmt->execute();
   $data = $stmt->fetchAll();

   return array_reverse($data);
}

?>