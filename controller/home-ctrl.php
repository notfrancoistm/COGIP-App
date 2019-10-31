<?php 
require 'model/home-mdl.php';

$string_input = 'wail madrane';
var_dump(string_validation($string_input));

$company = get_company($pdo, 1);

echo '<pre>';
   print_r($company);
echo '</pre>';

require 'view/home-view.php';
?>

