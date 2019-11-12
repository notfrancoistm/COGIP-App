<?php
require 'model/contacts-create-mdl.php';

// get previous data to display on the inputs values
$companies_data = get_many_companies();

// assign user value form the form else use the previous data from the db
$first_name = $_POST['first_name'] ?? '';
$last_name = $_POST['last_name'] ?? '';
$email = $_POST['email'] ?? '';
$contact_company = $_POST['company'] ?? '';
$phone = $_POST['phone'] ?? '';

// validate inputs
$first_name__val = string_validation($first_name);
$last_name__val = string_validation($last_name);
$email__val = email_validation($email);
$contact_company__val = id_validation($contact_company);
$phone__val = phone_validation($phone);
$submit = isset($_POST['submit']);

// if all is valide update db
if ($first_name__val AND $last_name__val AND $email__val AND $contact_company__val AND $phone__val AND $submit) {
   create_contact ($first_name, $last_name, $email, $contact_company, $phone);
}

require 'view/contacts-create-view.php';
?>