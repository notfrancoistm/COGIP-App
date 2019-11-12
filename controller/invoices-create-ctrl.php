<?php
require 'model/invoices-create-mdl.php';

$companies_data = get_many_companies();
$contacts_data = get_many_contacts();

if (isset($_POST['company'])) $company_value = explode(',', $_POST['company']);

// assign user value form the form else use the previous data from the db
$number = $_POST['invoices_number'] ? ucfirst($_POST['invoices_number']) : '';
$company_id = $company_value[0] ?? '';
$type_id = $company_value[1] ?? '';
$contact_id = $_POST['contact'] ?? '';

// validate inputs
$number__val = invoice_number_validation($number);
$company_id__val = id_validation($company_id);
$type_id__val = id_validation($type_id);
$contact__val = id_validation($contact_id);
$submit = isset($_POST['submit']);

// if all is valide update db
if ($number__val AND $company_id__val AND $type_id__val AND $contact__val AND $submit) {
   create_invoices ($number, $company_id, $type_id, $contact_id);
}

require 'view/invoices-create-view.php';
?>