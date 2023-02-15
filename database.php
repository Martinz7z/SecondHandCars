<?php
    $dsn = 'mysql:host=localhost;dbname=guitar_shop';
    $username = 'Admin';
    $password = 'Hello123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>