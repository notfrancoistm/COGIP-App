<?php 
require 'model/home-mdl.php';

$string_input = 'wail madrane';
//var_dump(string_validation($string_input));

//$invoices_data = get_many('invoices', 5);
//$contacts_data = get_many('contacts', 5);
//$compagnies_data = get_many('company', 5);

$invoices_data = get_many_invoices(5);
$contacts_data = get_many_contacts(5);
$companies_data = get_many_companies(5);

// dump($contacts_data);

//echo '<pre>';
 //  print_r($contacts_data);
//echo '</pre>';

require 'view/home-view.php';
?>

