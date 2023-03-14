<?php
    $db_host = 'localhost';
    $db_name = 'btth3_bai2';
    $db_user = 'root';
    $db_pass = '';
    // $db_port = '8080';

    try {
        $db = new PDO("mysql:host=$db_host;dbname=$db_name;", $db_user, $db_pass);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
?>