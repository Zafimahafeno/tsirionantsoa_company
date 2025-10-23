<?php
// IMPORTANT: Ce script nécessite l'installation de PHPMailer via Composer.
// Exécutez : composer require phpmailer/phpmailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Ce 'require' doit pointer vers l'emplacement du fichier autoload.php
// (généralement dans le dossier 'vendor' si vous utilisez Composer).
require 'vendor/autoload.php';

header('Content-Type: application/json');

// ==============================================
// --- CONFIGURATION OBLIGATOIRE ---
// ==============================================

// 1. Destinataire : L'adresse email qui recevra les messages du formulaire
$recipient_email = 'zanajaona2404@gmail.com';

// 2. Configuration SMTP (pour Gmail)
// NOTE : VOUS DEVEZ UTILISER UN MOT DE PASSE D'APPLICATION (App Password)
// La connexion avec un mot de passe Gmail standard ne fonctionne plus.
$smtp_host = 'smtp.gmail.com';
$smtp_port = 587; // CHANGEMENT : Passage au port sécurisé SMTPS standard (465)
$smtp_user = 'zanajaona2404@gmail.com';     // Votre adresse email complète (expéditeur)
$smtp_pass = 'spzo bkop ggzi ebiz';         // Votre MOT DE PASSE D'APPLICATION (16 caractères)

// ==============================================
// --- FIN CONFIGURATION ---
// ==============================================

// Vérifie si la méthode est bien POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    http_response_code(405); // Méthode non autorisée
    echo json_encode(["success" => false, "message" => "Méthode non autorisée."]);
    exit;
}

// 1. Récupération et nettoyage des données
$name = htmlspecialchars(trim($_POST['name'] ?? ''));
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
$message = htmlspecialchars(trim($_POST['message'] ?? ''));
$hp_email = trim($_POST['hp_email'] ?? ''); // Champ Honeypot ajouté

// 2. Validation de sécurité Anti-Spam (Honeypot)
// Si le champ caché (hp_email) est rempli par un robot OU S'IL EST ABSENT du formulaire, on bloque.
// Pour les besoins de ce débogage, nous allons simplement vérifier s'il est rempli.
if (!empty($hp_email)) {
    echo json_encode(["success" => false, "message" => "Erreur de validation de sécurité (Honeypot rempli)."]);
    exit;
}
// Ajout d'une vérification pour s'assurer que le champ existe bien si l'on ne veut pas de faux positifs de spam
// Cependant, l'absence d'un champ non requis ne devrait pas stopper l'exécution normalement, c'est pourquoi nous devons 
// nous assurer qu'il est bien présent dans le HTML ci-dessous.

// 3. Validation des données classiques
if (empty($name) || empty($email) || empty($message)) {
    echo json_encode(["success" => false, "message" => "Veuillez remplir tous les champs du formulaire."]);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo json_encode(["success" => false, "message" => "L'adresse email fournie n'est pas valide."]);
    exit;
}

// 4. Configuration PHPMailer
$mail = new PHPMailer(true); // Passer 'true' active les exceptions pour un meilleur débogage

try {
    // Paramètres du serveur
    $mail->isSMTP();
    $mail->Host = $smtp_host;
    $mail->SMTPAuth = true;
    $mail->Username = $smtp_user;
    $mail->Password = $smtp_pass;
    // CHANGEMENT : Utilisation de SMTPS (SSL) au lieu de STARTTLS
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
    $mail->Port = $smtp_port; // Port 465 pour SMTPS
    
    $mail->CharSet = 'UTF-8';
    $mail->setFrom($smtp_user, 'Tsirionantsoa Company'); // L'expéditeur doit être l'email SMTP
    $mail->isHTML(false); // Nous envoyons du texte brut

    // Destinataire et Reply-To
    $mail->addAddress($recipient_email);
    $mail->addReplyTo($email, $name); // Permet de répondre directement au client

    // Contenu de l'email
    $mail->Subject = "Nouvelle demande de devis de : " . $name;
    $mail->Body = "Vous avez reçu une nouvelle demande de devis :\n\n"
                . "Nom: " . $name . "\n"
                . "Email: " . $email . "\n\n"
                . "Message (Détail du projet):\n" . $message;

    // Envoi
    $mail->send();
    
    http_response_code(200);
    echo json_encode([
        "success" => true, 
        "message" => "Merci ! Votre demande a été reçue et nous vous répondrons rapidement."
    ]);

} catch (Exception $e) {
    // En cas d'erreur SMTP, le message d'erreur sera très précis grâce à $mail->ErrorInfo
    http_response_code(500);
    // Loggez l'erreur pour la déboguer, mais n'affichez pas d'informations trop techniques au client
    error_log("PHPMailer Error: " . $mail->ErrorInfo); 
    echo json_encode([
        "success" => false, 
        "message" => "Erreur du serveur lors de l'envoi de l'email. Détails pour le développeur: " . $mail->ErrorInfo
    ]);
}
?>
