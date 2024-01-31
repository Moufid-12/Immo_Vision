<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier si un fichier a été téléchargé
    // if (isset($_FILES["image"])) {
    //     $fileTmpPath = $_FILES["image"]["tmp_name"];

    //     // Faites quelque chose avec le chemin temporaire du fichier
    //     echo "Chemin temporaire du fichier : " . $fileTmpPath;
    // } else {
    //     echo "Aucun fichier n'a été téléchargé.";
    // }

    // Récupérer d'autres données du formulaire
    $refAnnonce = $_POST['ref'] ?? '';
    $fullName = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $telephone = $_POST['tel'] ?? '';
    $message = $_POST['message'] ?? '';
    $imageLink = $_GET['imageLink'] ?? '';

    echo "Chemin temporaire du fichier : " . $refAnnonce;
}   
?>
