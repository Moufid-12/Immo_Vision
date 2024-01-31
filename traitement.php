<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function envoyerEmailContact($nom, $email, $telephone, $objet, $message) {
    // Vérifier la validité de l'adresse email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Afficher un message d'erreur si l'email est invalide
        echo "L'adresse email n'est pas valide.";
        return false;
    }

    // Filtrer et valider les données
    $nom = filter_var($nom, FILTER_SANITIZE_STRING);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    $telephone = filter_var($telephone, FILTER_SANITIZE_STRING);
    $objet = filter_var($objet, FILTER_SANITIZE_STRING);
    $message = filter_var($message, FILTER_SANITIZE_STRING);

    // Créer une nouvelle instance de PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Paramètres du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'mail.mlvisionimmo.com'; // Mettez le nom de votre serveur SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'contact@mlvisionimmo.com'; // Mettez votre adresse email
        $mail->Password = 'Ml@vision2024'; // Mettez votre mot de passe
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        // Destinataire et expéditeur
        $mail->setFrom('contact@mlvisionimmo.com', $nom);
        $mail->addAddress('contact@mlvisionimmo.com'); // Mettez l'adresse email de destination

        // Ajouter la fonction de réponse
        $mail->addReplyTo($email, $nom);
        // Contenu du message
        $mail->isHTML(true);
        $mail->Subject = $objet;

        $corpsMessage = '<html>';
        $corpsMessage .= '<head><style>';
        $corpsMessage .= 'body { font-family: Arial, sans-serif; margin: 0; padding: 0; }';
        $corpsMessage .= 'h2 { color: #007bff; text-align: center; }'; // Centre le titre
        $corpsMessage .= 'p { color: #555; text-align: center; }'; // Centre le texte
        $corpsMessage .= '</style></head>';
        $corpsMessage .= '<body>';
        $corpsMessage .= '<div style="max-width: 600px; margin: 0 auto;">'; // Centrer le contenu dans une div avec une largeur maximale
        $corpsMessage .= '<h2>Nouveau message de la page de contact</h2>';
        $corpsMessage .= '<p><strong>Nom:</strong> ' . $nom . '</p>';
        $corpsMessage .= '<p><strong>Email:</strong> ' . $email . '</p>';
        $corpsMessage .= '<p><strong>Num:</strong> ' . $telephone . '</p>';
        $corpsMessage .= '<p><strong>Message:</strong> ' . $message . '</p>';
        $corpsMessage .= '</div>';
        $corpsMessage .= '</body>';
        $corpsMessage .= '</html>';

        $mail->Body = $corpsMessage;
        // Envoyer l'email
        $mail->send();
        return true;
    } catch (Exception $e) {
        // En cas d'erreur, afficher le message d'erreur
        echo "Erreur lors de l'envoi de l'email : {$mail->ErrorInfo}";
        return false;
    }
}

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["name"];
    $email = $_POST["email"];
    $telephone = $_POST["tel"];
    $objet = $_POST["objet"];
    $message = $_POST["message"];

    $resultatEnvoi = envoyerEmailContact($nom, $email, $telephone, $objet, $message);

    if ($resultatEnvoi === true) {
        // Utiliser une session pour stocker temporairement le message de succès
        session_start();
        $_SESSION['success_message'] = "Email envoyé avec succès.";

        // Redirection vers la page de contact
        header("Location: contact.php");
        exit;
    } else {
        // Redirection avec un paramètre d'erreur
        header("Location: contact.php?error_message=" . urlencode($resultatEnvoi));
        exit;
    }
}
?>
