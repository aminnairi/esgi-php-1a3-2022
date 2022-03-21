<?php

// Affiche les erreurs lorsqu'il y en a
ini_set("display_errors", 1);

// Affiche tous les types d'erreurs
error_reporting(E_ALL);

// Démarre une session
session_start();

// Permet d'afficher correctement un tableau PHP en HTML
function debug($array) {
    echo "<pre><code>" . print_r($array, true) . "</code></pre>";
}

// 1Mo
$maximumFileSizeAccepted = 1000000;

foreach ($_FILES["picture"]["name"] as $index => $fileName) {
    $size = $_FILES["picture"]["size"][$index];
    $type = $_FILES["picture"]["type"][$index];
    $destinationPath = __DIR__ . "/uploads/" . $fileName;

    if (!str_starts_with($type, "image/")) {
        $_SESSION["error"] = "Le type du fichier $fileName est incorrect (doit être une image).";
        header("Location: http://localhost/esgi-php-1a3-2022/fichiers");
        die();
    }

    if ($size > $maximumFileSizeAccepted) {
        $_SESSION["error"] = "La taille du fichier $fileName est incorrect (doit être inférieur à 1Mo, reçu $size octets).";
        header("Location: http://localhost/esgi-php-1a3-2022/fichiers");
        die();
    }

    if (file_exists($destinationPath)) {
        $_SESSION["error"] = "Le fichier $fileName existe déjà.";
        header("Location: http://localhost/esgi-php-1a3-2022/fichiers");
        die();
    }
}

foreach ($_FILES["picture"]["name"] as $index => $fileName) {
    $destinationPath = __DIR__ . "/uploads/" . $fileName;
    move_uploaded_file($_FILES["picture"]["tmp_name"][$index], $destinationPath);
}

header("Location: http://localhost/esgi-php-1a3-2022/fichiers");

// Récupérer le nom d'un fichier reçu par un client
// echo $_FILES["picture"]["name"];

// Récupérer le type d'un fichier reçu par un client
// echo $_FILES["picture"]["type"];

// Récupérer la taille d'un fichier reçu par un client
// echo $_FILES["picture"]["size"];

// Récupérer le nom temporaire d'un fichier reçu par un client
// echo $_FILES["picture"]["tmp_name"];

// Vérifier si aucune erreur n'est survenue
// if ($_FILES["picture"]["error"] !== UPLOAD_ERR_PARTIAL) echo "Une erreur est survenue";

// Déplacer un fichier envoyé par un client dans un dossier local pour sauvegarde permanente
// move_uploaded_file($_FILES["picture"]["tmp_name"], "/home/app/uploads/new-name.png");

// Envoyer plusieurs fichiers
// echo $_FILES["picture"]["name"][0];
// echo $_FILES["picture"]["name"][1];
// echo $_FILES["picture"]["name"][2];
