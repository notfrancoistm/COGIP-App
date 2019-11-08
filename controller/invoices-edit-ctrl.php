<?php
require 'model/invoices-edit-mdl.php';
$id = $_GET['id'];
$invoice = get_invoice_by_id($id);
require 'view/invoices-edit-view.php';
?>