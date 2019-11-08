<?php
require 'model/compagnies-edit-mdl.php';
$id = $_GET['id'];
$company = get_company_by_id($id);
require 'view/compagnies-edit-view.php';
?>