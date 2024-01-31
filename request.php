<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

function envoyerDemande($senderName, $senderNumber, $service, $action, $ville, $quartier) {
  
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
        $mail->setFrom('contact@mlvisionimmo.com', $senderName);
        $mail->addAddress('contact@mlvisionimmo.com'); // Mettez l'adresse email de destination

        // Ajouter la fonction de réponse
        // $mail->addReplyTo($email, $nom);
        // Contenu du message
        $mail->isHTML(true);
        $mail->Subject = 'Demande de service';

        $corpsMessage = '<html>';
        $corpsMessage .= '<head><style>';
        $corpsMessage .= 'body { font-family: Arial, sans-serif; margin: 0; padding: 0; }';
        $corpsMessage .= 'h2 { color: #007bff; text-align: center; }'; // Centre le titre
        $corpsMessage .= 'p { color: #555; text-align: center; }'; // Centre le texte
        $corpsMessage .= '</style></head>';
        $corpsMessage .= '<body>';
        $corpsMessage .= '<div style="max-width: 600px; margin: 0 auto;">'; // Centrer le contenu dans une div avec une largeur maximale
        $corpsMessage .= "<h2>Nouveau message de la page d'accueil pour le service . $service . </h2>";
        $corpsMessage .= "<p><strong>L'action demandée pour cet service est:</strong>  . $action . </p>";
        $corpsMessage .= '<p><strong>Nom:</strong> ' . $senderName . '</p>';
        $corpsMessage .= '<p><strong>Num:</strong> ' . $senderNumber . '</p>';
        $corpsMessage .= '<p><strong>Ville:</strong> ' . $ville . '</p>';
        $corpsMessage .= '<p><strong>Quartier:</strong> ' . $quartier . '</p>';
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


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs de formulaire
    $senderName = $_POST['nom'] ?? '';
    $senderNumber = $_POST['number'] ?? '';
    $quartier = $_POST['quartier'] ?? '';

    // Récupérer les options sélectionnées des listes déroulantes
    $selectedOptions = isset($_POST['selects']) ? $_POST['selects'] : [];

    $service = $selectedOptions[0];
    $action = $selectedOptions[1];
    $ville = $selectedOptions[2];

    $resultatEnvoi = envoyerDemande($senderName, $senderNumber, $service, $action, $ville, $quartier);

    if ($resultatEnvoi === true) {
        // Utiliser une session pour stocker temporairement le message de succès
        session_start();
        $_SESSION['success_message'] = "Votre demande a été envoyé avec succès.";

        // Redirection vers la page de contact
        header("Location: index.php");
        exit;
    } else {
        // Redirection avec un paramètre d'erreur
        header("Location: index.php?error_message=" . urlencode($resultatEnvoi));
        exit;
    }

    // Afficher les valeurs récupérées
    // echo "<p>Nom : " . $selectedOptions[0] . "</p>";
    // echo "<p>Numéro : " . $senderNumber . "</p>";

    // if (!empty($selectedOptions)) {
    //     echo "<p>Options sélectionnées :</p>";
    //     echo "<ul>";
    //     foreach ($selectedOptions as $option) {
    //         echo "<li>" . $option . "</li>";
    //     }
    //     echo "</ul>";
    // }
}
?>