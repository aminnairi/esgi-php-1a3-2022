<?php

ini_set("display_errors", 1);

error_reporting(E_ALL);

// L'adresse email de destination
$to = "nairi.amin@gmail.com";

// Le sujet du mail
$subject = "Test";

// Le corps du mail
$message = "This is a message";

// Les en-têtes du mail, notamment l'adresse de réponse et la version du mailer
$headers = 'From: contact@domain.com' . "\r\n" .
           'Reply-To: contact@domain.com' . "\r\n" .
           'X-Mailer: PHP/' . phpversion();

// L'envoi du mail
$emailSent = mail($to, $subject, $message, $headers);

if ($emailSent) {
    echo "Email sent successfully";
    // Si l'envoi du mail a réussi
} else {
    // Si l'envoi du mail a échoué
    echo "Failed to send email";
}
