<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $nom = htmlspecialchars($_POST['name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $sujet = $_POST['subject'] ?? '';
    $message = htmlspecialchars($_POST['message'] ?? '');

    if (empty($nom) || empty($email) || empty($sujet) || empty($message)) {
        header("Location: ../contact.php?success=0&reason=missing_fields");
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // Paramètres SMTP
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'batiroutesarl2@gmail.com'; // Remplace par ton email
        $mail->Password   = 'nfbrlegoixytpbfq'; // Mot de passe d'application sécurisé
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->Timeout    = 5; // Timeout pour éviter de bloquer longtemps

        // Destinataires
        $mail->setFrom($email, 'Message du site batiroute.com');
        $mail->addAddress('contact@batiroute.com', 'BATIROUTE SARL'); // Remplace par ton adresse de réception

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = $sujet;
        $mail->Body    = "
            <p><strong>Nom:</strong> $nom</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Sujet:</strong> $sujet</p>
            <p><strong>Message:</strong> $message</p>
        ";
        $mail->AltBody = "Nom: $nom\nEmail: $email\nSujet: $sujet\nMessage:\n$message";

        $mail->send();
        header('Location: ../contact.php?success=1'); // ou index.html, selon ta page
        exit();

    } catch (Exception $e) {
        header('Location: ../contact.php?success=0&reason=smtp_failed');
        exit();
    }
} else {
    header("Location: ../contact.php?success=0&reason=unauthorized");
    exit();
}
