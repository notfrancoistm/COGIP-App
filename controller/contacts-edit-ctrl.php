<?
require 'model/contacts-edit-mdl.php';
$id = $_GET['id'];
$contact = get_contact_by_id($id);
$companies_data = get_many_companies();
require 'view/contacts-edit-view.php';
?>

