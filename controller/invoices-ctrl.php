<?php
require 'model/invoices-mdl.php';
$invoices_data = get_many_invoices();
require 'view/invoices-view.php';
?>