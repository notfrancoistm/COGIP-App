<?
require 'model/contacts-edit-mdl.php';

// get previous data to display on the inputs values
$id = $_GET['id'];
$contact = get_contact_by_id($id);
$companies_data = get_many_companies();

// assign user value form the form else use the previous data from the db


// validate inputs


// if all is valide update db
update_contact($id, $first_name, $last_name, $email, $company, $phone);

require 'view/contacts-edit-view.php';
?>

