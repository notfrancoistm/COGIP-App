<?php
require 'model/compagnies-mdl.php';
$companies_data = get_many('company');
require 'view/compagnies-view.php';

?>