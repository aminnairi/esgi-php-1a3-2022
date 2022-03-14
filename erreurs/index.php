<?php

function divide() {
    // Est-ce que le premier argument est bien un entier
    // Est-ce que le second argument est bien un entier
    // Est-ce que le second argument n'est pas zéro
    // Retourne la division de deux entiers
}

echo "Hello, world!";

// Tester du code qui peut potentiellement lever une exception
try {
    // Lever une exception
    echo add("1", 2);
} catch (Exception $exception) {
    // Récupération et traitement des erreurs
    echo $exception->getMessage();
}

// Cette ligne la ne s'affiche pas
echo "Bye, world!";
