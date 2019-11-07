<?php
require 'model/compagnies-mdl.php';
$companies_data = get_many_companies();
require 'view/compagnies-view.php';

?>