<?php 
require 'model/home-mdl.php';

$string_input = 'wail madrane';
var_dump(string_validation($string_input));

$company = get_by_id('company', 1);

$table = table_validation('company');

echo '<pre>';
   print_r($company);
echo '</pre>';

echo '<pre>';
   var_dump($table);
echo '</pre>';



require 'view/home-view.php';
?>

