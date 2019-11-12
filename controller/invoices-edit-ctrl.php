<?php
require 'model/invoices-edit-mdl.php';
// get previous data to display on the inputs values
$id = $_GET['id'];
$invoice = get_invoice_by_id($id);
$companies_data = get_many_companies();
$contacts_data = get_many_contacts();

if (isset($_POST['company'])) $company_value = explode(',', $_POST['company']);

// assign user value form the form else use the previous data from the db
$number = $_POST['invoices_number'] ? ucfirst($_POST['invoices_number']) : $invoice['number'];
$company_id = $company_value[0] ?? $invoice['company'];
$type_id = $company_value[1] ?? $invoice['type_id'];
$contact_id = $_POST['contact'] ?? $invoice['type_id'];

// validate inputs
$number__val = invoice_number_validation($number);
$company_id__val = id_validation($company_id);
$type_id__val = id_validation($type_id);
$contact__val = id_validation($contact_id);
$submit = isset($_POST['submit']);

// if all is valide update db
if ($number__val AND $company_id__val AND $type_id__val AND $contact__val AND $submit) {
   update_invoice($id, $number, $company_id, $type_id, $contact_id);
}

require 'view/invoices-edit-view.php';
?>