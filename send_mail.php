<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['name']);
    $lastName = htmlspecialchars($_POST['email']);
    $email = htmlspecialchars($_POST['Objet']);
    $message = htmlspecialchars($_POST['message']);
    
    $to = "nicolas.martin5@viacesi.fr";
    $subject = "Nouveau message de contact de " . $firstName . " " . $lastName;
    $body = "Nom: $firstName\nEmail: $lastName\nObjet: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Votre message a été envoyé avec succès.";
    } else {
        echo "Une erreur s'est produite lors de l'envoi de votre message. Veuillez réessayer.";
    }
} else {
    echo "Méthode de requête non valide.";
}xn
?>

