<?php
session_start();
?>




<!-- temporaire -->
<?php
require 'view/component/header-component.php';
require 'view/component/menu-component.php';
?>

<?php
// routing
if (!empty($_GET['page'])) {
    $page = trim(addslashes($_GET['page']));
    $path = "controller/$page-ctrl.php";
    if (is_file($path)) {
        require $path;
    }
}
else {
    $page = 'home';
    require 'controller/home-ctrl.php';
}
?>

<?php 
require 'view/component/footer-component.php';
?>