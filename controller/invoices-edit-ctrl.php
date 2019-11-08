<?php
require 'model/invoices-edit-mdl.php';
$id = $_GET['id'];
$invoice = get_invoice_by_id($id);
$companies_data = get_many_companies();
$contacts_data = get_many_contacts();
require 'view/invoices-edit-view.php';
?>