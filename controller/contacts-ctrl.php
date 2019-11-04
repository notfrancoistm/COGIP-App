<?php
require 'model/contacts-mdl.php';
$contacts_data = get_many('contacts');
require 'view/contacts-view.php';
?>