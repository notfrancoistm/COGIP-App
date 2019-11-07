<?php
require 'model/GLOBfunction.php';

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
?>