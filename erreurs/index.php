<?php

/**
 * Permet d'afficher tous les types d'erreurs, exceptions, dépréciation et informations
 * @see https://www.php.net/manual/en/function.error-reporting.php
 * @see https://www.php.net/manual/fr/errorfunc.constants.php
 */
error_reporting(E_ALL);

/**
 * Permet d'afficher les erreurs sur la page HTML
 * @see https://www.php.net/manual/en/function.ini-set.php
 */
ini_set("display_errors", true);

function divide($numerator, $denominator) {
    if (!is_int($numerator)) {
        throw new Exception("First argument is not an integer");
    }

    if (!is_int($denominator)) {
        throw new Exception("Second argument is not an integer");
    }

    if ($denominator === 0) {
        throw new Exception("Second argument cannot be zero");
    }

    return $numerator / $denominator;
}

/**
 * Tester du code qui peut potentiellement lever une exception
 * @see https://www.php.net/manual/fr/language.exceptions.php
 */
try {
    // Lever une exception
    echo "Le résultat de 1 / 2 est " . divide(1, 0);
} catch (Exception $exception) {
    // Récupération et traitement des erreurs (et empêche que le script ne soit arrêté à cause de l'exception)
    echo $exception->getMessage();
} finally {
    // Ce bloc est exécuté quoi qu'il arrive (exception ou non)
    echo "Après mon script";
}

var_dump($_COOKIE);
