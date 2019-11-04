<?php

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