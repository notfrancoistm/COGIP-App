<?php
function routing () {
   global $error;

   // verify if user rights are set to 'modo' or 'god'
   // if not redirect to connexion page
   if (preg_match('/modo|god/', $_SESSION['rights']) !== 1) {
       echo $error['session'];
       require 'controller/connexion-ctrl.php';
       return;
   }

   // Menu
   if ($_GET['page'] !== 'logout') {
       require 'view/component/menu-component.php';
   }

   // if $_GET['page'] is set, sanitize the value and create the page path
   // if not go to home page
   if (!empty($_GET['page'])) {
       $page = trim(addslashes($_GET['page']));
       $path = "controller/$page-ctrl.php";
   }
   else {  
       require 'controller/home-ctrl.php';
       return;
   }

   // if the page exists display it
   if (is_file($path)) {
       require $path;
   }
   else {
       echo "Error 404: $page page not found";
       return;
   }
}