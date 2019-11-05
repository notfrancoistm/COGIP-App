<?php
    require 'model/contacts-details-mdl.php';
    $id = $_GET['id'];
    $contact = get_by_id('contacts', $id);
    require 'view/contacts-details-view.php';
?>