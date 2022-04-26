<?php

include __DIR__ . "/functions/getDatabaseConnection.php";

session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /esgi-php-1a3-2022/base-de-donnees/index.php");
    die();
}

if (isset($_POST["email"])) {
    $_SESSION["errors"]["email"] = "L'adresse email est obligatoire.";
    header("Location: /esgi-php-1a3-2022/base-de-donnees/index.php");
    die();
}

$databaseConnection = getDatabaseConnection();

$email = $_POST["email"];
$password = $_POST["password"];
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
