<?php

// Documentation : https://www.php.net/manual/en/book.image.php

ini_set("display_errors", 1);
error_reporting(E_ALL);

// Paramétrage des en-têtes
header("Content-Type: image/png");

// Largeur de l'image à créer
$width = 200;

// Hauteur de l'image à créer
$height = 200;

// Création d'une image PNG en PHP
$image = imagecreatetruecolor($width, $height);

// Création d'un texte
$textColorRed = 255;
$textColorGreen = 255;
$textColorBlue = 255;
$textColor = imagecolorallocate($image, $textColorRed, $textColorGreen, $textColorBlue);
$textAbscissa = 50;
$textOrdinates = 50;
$textFontSize = 5;
$text = "Hello, ESGI!";

// Ajout du texte à l'image
imagestring($image, $textFontSize, $textAbscissa, $textOrdinates, $text, $textColor);

// Création de forme géométriques (ici, une ligne)
$lineAbscissaStart = 0;
$lineOrdinatesStart = 0;
$lineAbscissaEnd = 200;
$lineOrdinatesEnd = 200;
$lineColorRed = 255;
$lineColorGreen = 0;
$lineColorBlue = 0;
$lineColor = imagecolorallocate($image, $lineColorRed, $lineColorGreen, $lineColorBlue);

// Ajout de la ligne à l'image
imageline($image, $lineAbscissaStart, $lineOrdinatesStart, $lineAbscissaEnd, $lineOrdinatesEnd, $lineColor);

// Affichage d'une image
imagepng($image);

// Destruction de l'image
imagedestroy($image);
