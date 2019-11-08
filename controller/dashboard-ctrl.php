<?php 
    require 'model/dashboard-mdl.php';
    $invoices_data = get_many_invoices(5);
    $contacts_data = get_many_contacts(5);
    $companies_data = get_many_companies(5);
    require 'view/dashboard-view.php'
?>