<?php
require 'model/GLOBfunction.php';

function get_contact_by_id ($id) {
   global $pdo;

   $param = [
      'id' => $id
   ];

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
   WHERE contacts.id = :id
SQL;

   $stmt = $pdo->prepare($sql);
   $stmt->execute($param);
   $data = $stmt->fetch(); 

   return $data;
}
?>