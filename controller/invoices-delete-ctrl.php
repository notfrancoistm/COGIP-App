<?php
require 'model/invoices-delete-mdl.php';

$id = $_GET['id'];
$invoice = get_invoice_by_id($id);
if ($invoice) {
   delete_row('invoices', $id);
}

require 'view/invoices-delete-view.php';
?>