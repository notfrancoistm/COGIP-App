<?php
    require 'model/invoices-details-mdl.php';
    $id = $_GET['id'];
    $invoice = get_by_id('invoices', $id);
    require 'view/invoices-details-view.php';
?>