<?php 
    require 'model/compagnies-details-mdl.php';
    $id = $_GET['id'];
    $company = get_company_by_id($id);
    require 'view/compagnies-details-view.php';
?>