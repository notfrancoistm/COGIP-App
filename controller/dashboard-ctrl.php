<?php 
    require 'model/dashboard-mdl.php';
    $invoices_data = get_many('invoices', 5);
    $contacts_data = get_many('contacts', 5);
    $compagnies_data = get_many('company', 5);
    require 'view/dashboard-view.php'
?>