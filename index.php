<?php
session_start();

$error = [];

// database connection
require 'model/dbconnect.php';

// session
require 'session.php';
authentification();
deconnection();

// Header
require 'view/component/header-component.php';

//unset($_SESSION);
//session_destroy();

// routing
require 'routing.php';
routing();
 
// footer
require 'view/component/footer-component.php';
?>
