<?php
session_start();
$_SESSION['information'] = '';

if (count($_POST) == 0) {
    header('location: ../contact.php');
    exit();
}

$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$message = htmlspecialchars($_POST['message']);
$email = htmlspecialchars($_POST['email']);
$subject_user = isset($_POST['subject']) ? htmlspecialchars($_POST['subject']) : '';

$affichage_retour = '';
$erreurs = 0;

if (empty($nom)) {
    $affichage_retour .= '<p style="color: red; font-weight: bold;">Le champ Nom est obligatoire<br></p>';
    $erreurs++;
}
if (empty($prenom)) {
    $affichage_retour .= '<p style="color: red; font-weight: bold;">Le champ Prénom est obligatoire<br></p>';
    $erreurs++;
}
if (empty($message)) {
    $affichage_retour .= '<p style="color: red; font-weight: bold;">Le champ Message est obligatoire<br></p>';
    $erreurs++;
}
if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $affichage_retour .= '<p style="color: red; font-weight: bold;">Adresse mail incorrecte ou vide<br></p>';
    $erreurs++;
}
if (empty($subject_user)) {
    $affichage_retour .= '<p style="color: red; font-weight: bold;">Vous devez sélectionner un type de demande<br></p>';
    $erreurs++;
}

if ($erreurs == 0) {
    $subject = 'SAE105 : ' . $subject_user . ' de ' . $prenom . ' ' . $nom;
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $email_dest = "mmi24b11@mmi-troyes.fr";
    $message_html = "<html><body style='background-color: rgb(240, 240, 240); font-family: Arial, sans-serif; color: #333; padding: 20px;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);'>
            <div style='font-size: 20px; font-weight: bold; color: #0071c5; margin-bottom: 20px;'>Nouvelle demande reçue</div>
            <div style='margin-bottom: 15px;'><strong>Nom :</strong> $nom</div>
            <div style='margin-bottom: 15px;'><strong>Prénom :</strong> $prenom</div>
            <div style='margin-bottom: 15px;'><strong>Email :</strong> $email</div>
            <div style='margin-bottom: 15px;'><strong>Sujet :</strong> $subject_user</div>
            <div style='margin-bottom: 15px;'><strong>Message :</strong><br>$message</div>
            <div style='text-align: center; margin-top: 30px;'><img src='http://mmi24b11.sae105.ovh/images/BMWlogo.png' alt='Logo BMW Motorsport' style='width: 200px;'></div>
        </div>
    </body></html>";

    if (mail($email_dest, $subject, $message_html, $headers)) {
        $erreurs = 0;
    } else {
        $erreurs++;
    }

    $subject_conf = 'Confirmation de votre demande sur SAE105';
    $headers_conf = "From: BMW Motorsport <BMW-Motorsport@mmi-troyes.fr>\r\n";
    $headers_conf .= "Reply-To: no-reply@mmi-troyes.fr\r\n";
    $headers_conf .= "MIME-Version: 1.0\r\n";
    $headers_conf .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message_conf = "<html><body style='background-color: rgb(240, 240, 240); font-family: Arial, sans-serif; color: #333; padding: 20px;'>
        <div style='max-width: 600px; margin: 0 auto; background-color: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);'>
            <div style='font-size: 20px; font-weight: bold; color: #0071c5; margin-bottom: 20px;'>Bonjour $prenom $nom,</div>
            <div style='margin-bottom: 15px;'>Nous avons bien reçu votre demande concernant : <strong>$subject_user</strong>.</div>
            <div style='margin-bottom: 15px;'>Nous vous répondrons dans les plus brefs délais.</div>
            <div style='margin-bottom: 15px;'>BMW Motorsport</div>
            <div style='text-align: center; margin-top: 30px;'><img src='http://mmi24b11.sae105.ovh/images/BMWlogo.png' alt='Logo BMW Motorsport' style='width: 200px;'></div>
        </div>
    </body></html>";

    if (mail($email, $subject_conf, $message_conf, $headers_conf)) {
        $erreurs = 0;
    } else {
        $erreurs++;
    }

    $affichage_retour = '<p style="color: green; font-weight: bold;">Votre demande a bien été envoyée</p>';
    if ($erreurs != 0) {
        $affichage_retour = '<p style="color: red; font-weight: bold;">Échec de l\'envoi du message</p>';
    }
}

$_SESSION['information'] = $affichage_retour;
header('location: ../contact.php');
exit();
?>