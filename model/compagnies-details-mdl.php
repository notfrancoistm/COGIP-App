<?php
require 'model/GLOBfunction.php';

function get_company_by_id ($id) {
   global $pdo;

   $param = [
      'id' => $id
   ];

   $stmt = $pdo->prepare('SELECT * FROM company WHERE id=:id');
   $stmt->execute($param);
   $data = $stmt->fetch(); 

   return $data;
}
?>