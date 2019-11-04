<?php
session_start();

$error = [];
// Database connection

function openConnection() {
    $dbhost = "database";
    $dbuser = "root";
    $dbpass = "root";
    $db     = "cogip";

    $pdo = new PDO("mysql:host=$dbhost;dbname=$db;charset=utf8mb4",$dbuser,$dbpass);

    return $pdo;
}

try {
    $pdo = openConnection();
    if ($pdo) {
        // echo "Connected to the <strong>$db</strong> database successfully!";
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    }
}
catch (PDOException $ex){
    die($ex->getMessage());
}
?>

<!-- temporaire -->
<?php
// Session
require 'session.php';

// Header
require 'view/component/header-component.php';
?>

<?php
//unset($_SESSION);
//session_destroy();

echo '<pre>';
   print_r($_POST);
echo '</pre>';

var_dump($_SESSION['rights']);

echo $error['session'];

// routing
if (preg_match('/modo|god/', $_SESSION['rights']) === 1) {

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
?>

<?php 
// Footer
require 'view/component/footer-component.php';
?>
