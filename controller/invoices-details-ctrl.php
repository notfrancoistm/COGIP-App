<?php
    require 'model/invoices-details-mdl.php';
    $id = $_GET['id'];
    $invoices_data = get_by_id('invoices', $id);
    echo '<pre>';
        var_dump($invoices_data);
    echo '</pre>';
    require 'view/invoices-details-view.php';
?>