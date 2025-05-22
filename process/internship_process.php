<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $lastname = htmlspecialchars($_POST['lastname'] ?? '');
    $firstname = htmlspecialchars($_POST['firstname'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = $_POST['phone'] ?? '';

    if (empty($lastname) || empty($firstname) || empty($email) || empty($phone)) {
        header("Location: ../internship_application.php?success=0&reason=missing_fields");
        exit();
    }

    $mail = new PHPMailer(true);

    try {
        // Configuration serveur
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'batiroutesarl2@gmail.com';
        $mail->Password = 'nfbrlegoixytpbfq';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port = 465;
        $mail->Timeout = 5;

        // Destinataires
        $mail->setFrom($email, 'Demande de stage');
        $mail->addAddress('contact@batiroute.com', 'BATIROUTE SARL');  // destinataire

        // Contenu
        $mail->isHTML(true);
        $mail->Subject = 'Nouvelle demande de stage de ' . $firstname . ' ' . $lastname;
        $mail->Body = "
            <h3>Informations du candidat :</h3>
            <p><strong>Nom :</strong> $lastname</p>
            <p><strong>Prenom :</strong> $firstname</p>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Contact :</strong> $phone</p>
        ";

        // Pièces jointes
        $pieces = [
            'motivation' => 'Lettre de motivation',
            'cv' => 'CV',
            'cni' => 'CNI'
        ];

        foreach ($pieces as $key => $label) {
            if (isset($_FILES[$key]) && $_FILES[$key]['error'] === 0) {
                $mail->addAttachment($_FILES[$key]['tmp_name'], $label . ' - ' . $_FILES[$key]['name']);
            }
        }

        // Fichiers multiples : diplômes et attestations
        $multipleFields = ['diplomes', 'attestations'];
        foreach ($multipleFields as $field) {
            if (!empty($_FILES[$field]['name'][0])) {
                for ($i = 0; $i < count($_FILES[$field]['name']); $i++) {
                    if ($_FILES[$field]['error'][$i] === 0) {
                        $mail->addAttachment($_FILES[$field]['tmp_name'][$i], ucfirst($field) . ' - ' . $_FILES[$field]['name'][$i]);
                    }
                }
            }
        }

        $mail->send();
        header('Location: ../internship_application.php?success=1'); // ou index.html, selon ta page
        exit();

    } catch (Exception $e) {
        header('Location: ../internship_application.php?success=0&reason=smtp_failed');
        exit();
    }
} else {
    header("Location: ../internship_application.php?success=0&reason=unauthorized");
    exit();
}

?>
