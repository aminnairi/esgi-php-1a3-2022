<?php

/**
 * Ajout d'un cookie à une requête
 * @see https://www.php.net/manual/en/function.setcookie.php
 * @see https://www.php.net/manual/en/function.random-bytes.php
 * @see https://www.php.net/manual/en/function.bin2hex.php
 */
setcookie("TRACKING_ID", bin2hex(random_bytes(16)), time() + 3600, "/");

/**
 * Récupérer tous les cookies
 * @see https://www.php.net/manual/en/reserved.variables.cookies.php
 */
var_dump($_COOKIE);

// A faire : créer un cookie TRACKING_ID sur cette page qui contient une chaîne de caractères aléatoire
// A faire : Faire en sorte que ce cookie ne soit disponible que pendant 30 secondes
// A faire : Faire en sorte que ce cookie soit disponible sur toutes les pages
// A faire : Afficher l'ensemble des cookies sur la page d'exercice lié aux erreurs
