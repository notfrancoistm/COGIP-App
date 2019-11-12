<?php
require 'model/compagnies-create-mdl.php';

// get previous data to display on the inputs values
$types = get_all_types();

// assign user value form the form else use the previous data from the db
$company_name = $_POST['company_name'] ?? '';
$vat_number = $_POST['vat_number'] ?? '';
$country = $_POST['country'] ?? '';
$company_type = $_POST['type'] ?? '';

// validate inputs
$company_name__val = string_validation($company_name);
$vat_number__val = vat_validation($vat_number);
$country__val = country_validation($country);
$company_type__val = id_validation($company_type);
$submit = isset($_POST['submit']);

// if all is valide update db
if ($company_name__val AND $vat_number__val AND $country__val AND $company_type__val AND $submit) {
   create_company($company_name, $vat_number, $country, $company_type);
}

require 'view/compagnies-create-view.php';
?>
