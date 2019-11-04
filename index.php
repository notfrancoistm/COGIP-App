<?php
session_start();

//unset($_SESSION);

// database connection
require 'model/dbconnect.php';

// temporaire

// session
require 'session.php';

// Header
require 'view/component/header-component.php';

// routing
if (preg_match('/modo|god/', $_SESSION['rights'])) {

// Menu
    require 'view/component/menu-component.php';

    if (!empty($_GET['page'])) {
        $page = trim(addslashes($_GET['page']));
        $path = "controller/$page-ctrl.php";
        if (is_file($path)) {
            require $path;
        }
        else {
            echo "Error 404: $page page not found";
        }
    }
    else {

        require 'controller/home-ctrl.php';
    }

}
else {
    require 'controller/connexion-ctrl.php';
}
 
// footer
require 'view/component/footer-component.php';
?>
