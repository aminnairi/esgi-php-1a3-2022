<?php

function getDatabaseConnection() {
    $dsn = "mysql:host=localhost;dbname=esgi-php-1a3-2022";
    $user = "root";
    $password = "root";
    $pdoOptions = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
    $databaseConnection = new PDO($dsn, $user, $password, $pdoOptions);

    return $databaseConnection;
}
