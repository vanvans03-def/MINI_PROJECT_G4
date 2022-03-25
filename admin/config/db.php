<?php 

    $db_host = "localhost";
    $db_user = "root";
    $db_password = "";
    $db_name = "appleshop";

    try {
        $conn = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "connected";
    } catch(PDOEXCEPTION $e) {
        $e->getMessage();
    }


?>