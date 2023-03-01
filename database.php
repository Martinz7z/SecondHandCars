<?php
    $dsn = 'mysql:host=localhost;dbname=project_database';
    $username = 'Martin';
    $password = 'Jack123';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>