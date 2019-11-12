<?php
require 'model/compagnies-delete-mdl.php';

$id = $_GET['id'];
$company = get_company_by_id($id);
if ($company) {
   delete_row('company', $id);
}

require 'view/compagnies-delete-view.php'; //not existe
?>