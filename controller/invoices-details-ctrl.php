<?php
    require 'model/invoices-details-mdl.php';
    $id = $_GET['id'];
    $invoice = get_invoice_by_id($id);
    require 'view/invoices-details-view.php';
?>