<?php 
    error_reporting(E_ALL);  // Affiche toutes les erreurs PHP
    ini_set('display_errors', 1);  // Affiche les erreurs directement sur la page

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/Exception.php';
    require 'PHPMailer/PHPMailer.php';
    require 'PHPMailer/SMTP.php';

    if (isset($_POST['submit-form'])) {
        $nom = htmlspecialchars($_POST['username']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ? $_POST['email'] : '';
        $telephone = htmlspecialchars($_POST['phone']);
        $message = htmlspecialchars($_POST['message']);

       

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'julyssewilkenson9@gmail.com';
            $mail->Password = 'qpyrhathtdhcjklp';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Destinataire et expéditeur
            $mail->setFrom($email, $nom);
            $mail->addAddress("julyssewilkenson9@gmail.com", "IFOS");

            // Contenu de l'e-mail
            $mail->isHTML(true);
            $mail->Subject = 'Nouvelle soumission de formulaire depuis votre site';
            $mail->Body = "Nom: $nom<br>E-mail: $email<br>Téléphone: $telephone<br>Message: $message";

            $mail->send();
            // Redirigez l'utilisateur vers une page de confirmation
            header("Location: ./index.php");
            exit();
        } catch (Exception $e) {
            echo 'Erreur lors de l\'envoi du message : ', $mail->ErrorInfo;
        }
    }
?>
