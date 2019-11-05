<?php 
    require 'model/compagnies-details-mdl.php';
    $id = $_GET['id'];
    $company = get_by_id('company', $id);
    require 'view/compagnies-details-view.php';
?>