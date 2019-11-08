<?php
require 'model/contacts-details-mdl.php';
$id = $_GET['id'];
$contact = get_contact_by_id($id);   
require 'view/contacts-details-view.php';
?>