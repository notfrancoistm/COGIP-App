<?php 
    require 'model/compagnies-details-mdl.php';
    $id = $_GET['id'];
    $company = get_company_by_id($id);

    echo '<pre>';
    var_dump($company);
    // print_r(get_by_foreign_key('contacts', 'company', $id));
    echo '</pre>';

    require 'view/compagnies-details-view.php';
?>