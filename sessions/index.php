<?php


/**
 * Démarrer une session
 * @see https://www.php.net/manual/fr/function.session-start.php
 */
session_start();


// Ajouter des données en session
$_SESSION["userid"] = "1";

// Récupérer des données en session
// var_dump($_SESSION);

// Modifier des données en session
$_SESSION["userid"] = "2";
//var_dump($_SESSION);

// Supprimer des données en session
// unset($_SESSION["userid"]);
// var_dump($_SESSION);

/**
 * Supprimer une session
 * @see https://www.php.net/manual/fr/function.session-destroy.php
 */
session_destroy();
// var_dump($_SESSION);

// Affiche le chemin de sauvegarde d'une session
var_dump(session_save_path());
