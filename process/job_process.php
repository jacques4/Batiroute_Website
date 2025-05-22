<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $lastname        = htmlspecialchars($_POST['lastname'] ?? '');
    $firstname     = htmlspecialchars($_POST['firstname'] ?? '');
    $email      = htmlspecialchars($_POST['email'] ?? '');
    $phone  = htmlspecialchars($_POST['phone'] ?? '');

    if (empty($lastname) || empty($firstname) || empty($email) || empty($phone)) {
    header("Location: ../job_application.php?success=0&reason=missing_fields");
    exit();
    }

    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'batiroutesarl2@gmail.com'; // 🔁 Ton email
        $mail->Password   = 'nfbrlegoixytpbfq'; // 🔁 Mot de passe d'application Gmail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = 465;
        $mail->Timeout = 5;

        $mail->setFrom($email, 'Demande d\'emploi');
        $mail->addAddress('contact@batiroute.com', 'BATIROUTE SARL'); // 🔁 Email de réception

        $mail->isHTML(true);
        $mail->Subject = "Nouvelle demande d'emploi : $firstname $lastname";
        $mail->Body = "
            <h3>Nouvelle demande d'emploi</h3>
            <p><strong>Nom :</strong> $lastname</p>
            <p><strong>Prenom :</strong> $firstname</p>
            <p><strong>Email :</strong> $email</p>
            <p><strong>Contact :</strong> $phone</p>
        ";

        // 🔗 Ajouter les pièces jointes directement depuis $_FILES
        if (isset($_FILES['motivation']) && $_FILES['motivation']['error'] === UPLOAD_ERR_OK) {
            $mail->addAttachment($_FILES['motivation']['tmp_name'], $_FILES['motivation']['name']);
        }

        if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
            $mail->addAttachment($_FILES['cv']['tmp_name'], $_FILES['cv']['name']);
        }

        if (!empty($_FILES['diplomes']['name'][0])) {
            foreach ($_FILES['diplomes']['tmp_name'] as $i => $tmpName) {
                if ($_FILES['diplomes']['error'][$i] === UPLOAD_ERR_OK) {
                    $mail->addAttachment($tmpName, $_FILES['diplomes']['name'][$i]);
                }
            }
        }

        if (!empty($_FILES['attestations']['name'][0])) {
            foreach ($_FILES['attestations']['tmp_name'] as $i => $tmpName) {
                if ($_FILES['attestations']['error'][$i] === UPLOAD_ERR_OK) {
                    $mail->addAttachment($tmpName, $_FILES['attestations']['name'][$i]);
                }
            }
        }

        if (isset($_FILES['cni']) && $_FILES['cni']['error'] === UPLOAD_ERR_OK) {
            $mail->addAttachment($_FILES['cni']['tmp_name'], $_FILES['cni']['name']);
        }

        if (isset($_FILES['naissance']) && $_FILES['naissance']['error'] === UPLOAD_ERR_OK) {
            $mail->addAttachment($_FILES['naissance']['tmp_name'], $_FILES['naissance']['name']);
        }

        $mail->send();
        header('Location: ../job_application.php?success=1'); // ou index.html, selon ta page
        exit();

    } catch (Exception $e) {
        header('Location: ../job_application.php?success=0&reason=smtp_failed');
        exit();
    }
} else {
    header("Location: ../job_application.php?success=0&reason=unauthorized");
    exit();
}
