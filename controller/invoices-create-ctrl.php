<?php
require 'model/invoices-create-mdl.php';
$companies_data = get_many_companies();
$contacts_data = get_many_contacts();
require 'view/invoices-create-view.php';
?>