<?php
session_start();

//$_SESSION['rights'] = 'god';
//unset($_SESSION);

var_dump($_SESSION);

// Database cennection
function openConnection() {
    $dbhost = "database";
    $dbuser = "root";
    $dbpass = "root";
    $db = "cogip";

    $pdo = new PDO("mysql:host=$dbhost;dbname=$db;charset=utf8",$dbuser,$dbpass);

    return $pdo;
}

try {
    $connect = openConnection();
    if ($connect) echo "Connected to the <strong>$db</strong> database successfully!";
}
catch (PDOException $ex){
    die($ex->getMessage());
}

?>

<!-- temporaire -->
<?php
require 'view/component/header-component.php';
require 'view/component/menu-component.php';
?>

<?php
// routing
var_dump(preg_match('/modo|god/', $_SESSION['rights']));

if (preg_match('/modo|god/', $_SESSION['rights'])) {
    if (!empty($_GET['page'])) {
        $page = trim(addslashes($_GET['page']));
        $path = "controller/$page-ctrl.php";
        if (is_file($path)) {
            require $path;
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
<?php require 'view/contacts-create-view.php' ?>

<?php 
require 'view/component/footer-component.php';
?>
