<?php 
require 'model/contacts-delete-mdl.php';

$id = $_GET['id'];
$contact = get_contact_by_id($id);
if ($contact) {
   delete_row('contacts', $id);
}

// require 'view/contacts-delete-view.php'; //not existe
?>