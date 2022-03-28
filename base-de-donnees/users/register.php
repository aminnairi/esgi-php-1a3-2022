<?php

ini_set("display_errors", 1);
error_reporting(E_ALL);

session_start();

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /esgi-php-1a3-2022/base-de-donnees/users/new.php");
    die();
}

if (!isset($_POST["email"])) {
    $_SESSION["error_email"] = "L'adresse email est obligatoire";
    header("Location: /esgi-php-1a3-2022/base-de-donnees/users/new.php");
    die();
}

if (!isset($_POST["password"])) {
    $_SESSION["error_password"] = "Le mot de passe est obligatoire";
    header("Location: /esgi-php-1a3-2022/base-de-donnees/users/new.php");
    die();
}

if (!isset($_POST["confirmation"])) {
    $_SESSION["error_confirmation"] = "La confirmation du mot de passe est obligatoire";
    header("Location: /esgi-php-1a3-2022/base-de-donnees/users/new.php");
    die();
}

$email = $_POST["email"];
$password = $_POST["password"];
$hashedPassword = password_hash($password, PASSWORD_BCRYPT);

$dsn = "mysql:host=localhost;dbname=esgi-php-1a3-2022";
$user = "root";
$password = "root";
$pdoOptions = [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC];
$databaseConnection = new PDO($dsn, $user, $password, $pdoOptions);

$query = $databaseConnection->prepare("INSERT INTO users(email, password) VALUES(:email, :password)");
$query->execute([
    ":email" => $email,
    ":password" => $hashedPassword
]);

header("Location: /esgi-php-1a3-2022/base-de-donnees/users/new.php");
