<?php
require 'model/compagnies-edit-mdl.php';
$id = $_GET['id'];
$company = get_company_by_id($id);
$types = get_all_types();
require 'view/compagnies-edit-view.php';
?>