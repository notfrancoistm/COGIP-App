<?php
require 'model/compagnies-edit-mdl.php';

// get previous data to display on the inputs values
$id = $_GET['id'];
$company = get_company_by_id($id);
$types = get_all_types();

// assign user value form the form else use the previous data from the db
$company_name = $_POST['company_name'] ?? $company['company_name'];
$vat_number = $_POST['vat_number'] ?? $company['VAT'];
$country = $_POST['country'] ?? $company['country'];
$company_type = $_POST['type'] ?? $company['type'];

// validate inputs
$company_name__val = string_validation($company_name);
$vat_number__val = vat_validation($vat_number);
$country__val = country_validation($country);
$submit = isset($_POST['submit']);

// if all is valide update db
if ($company_name__val AND $vat_number__val AND $country__val AND $submit) {
   update_company($id, $company_name, $vat_number, $country, $type);
}

require 'view/compagnies-edit-view.php';
?>