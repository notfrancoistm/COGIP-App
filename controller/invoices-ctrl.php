<?php
require 'model/invoices-mdl.php';
$invoices_data = get_many('invoices');
require 'view/invoices-view.php';
?>