<?php

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /esgi-php-1a3-2022/base-de-donnees/index.php");
    die();
}

$email = $_POST["email"];
$password = $_POST["password"];

$dsn = "mysql:host=localhost;dbname=esgi-php-1a3-2022";
$user = "root";
$password = "root";
$pdoOptions = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$databaseConnection = new PDO($dsn, $user, $password, $pdoOptions);

$query = $databaseConnection->prepare("SELECT email, password FROM users WHERE email = :email");

$query->execute([
    ":email" => $email
]);

$users = $query->fetchAll();

die(var_dump($users));

if (count($users) === 0) {
    // Renvoyer une erreur en session à la page index.php
    header("Location: /esgi-php-1a3-2022/base-de-donnes/index.php");
    die();
}

$userFound = $users[0];

var_dump($userFound);
