<?php
require 'model/GLOBfunction.php';

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

?>