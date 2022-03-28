<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

function debugArray($array) {
    echo "<pre><code>" . print_r($array, true) . "</code></pre>";
}

$dsn = "mysql:host=localhost;dbname=esgi-php-1a3-2022";
$user = "root";
$password = "root";
$pdoOptions = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$databaseConnection = new PDO($dsn, $user, $password, $pdoOptions);

$query = $databaseConnection->query("SELECT * FROM users");
$users = $query->fetchAll();

foreach ($users as $user) {
    var_dump($user["email"]);
}

// Connexion à une base de données
// Exécution de requête SQL
// Injection SQL
// Sécurisation de requête SQL
// Transactions
