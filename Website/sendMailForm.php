<?php
if(isset($_POST['sendContactForm']))
{
    if(empty($_POST['name']) || strlen($_POST['name']) < 2 || strlen($_POST['name']) > 50 || empty($_POST['email']) || strlen($_POST['email']) > 255 || empty($_POST['message']) || strlen($_POST['message']) > 1000)
    {
        $error = "Le formulaire n'est pas rempli correctement !";
    }
    else
    {
        $to    = "logancrossing@gmail.com";
        $from  = $_POST['email'];
        $identite = $_POST['name'];
        $message = $_POST['message'];

        $JOUR  = date("Y-m-d");
        $HEURE = date("H:i");

        $Subject = "Contact BreakInvaders - $JOUR $HEURE";

        $mail_Data = "";
        $mail_Data .= "<html> \n";
        $mail_Data .= "<head> \n";
        $mail_Data .= "<title> $Subject </title> \n";
        $mail_Data .= "</head> \n";
        $mail_Data .= "<body> \n";
        $mail_Data .= "<h3> $identite </h3><hr>\n";
        $mail_Data .= "<blockquote> $message </blockquote> \n";
        $mail_Data .= "</body> \n";
        $mail_Data .= "</HTML> \n";

        $headers  = "MIME-Version: 1.0 \n";
        $headers .= "Content-type: text/html; charset=utf-8 \n";
        $headers .= "From: $from  \n";
        $headers .= "Disposition-Notification-To: $from  \n";
        $headers .= "X-Priority: 1  \n";
        $headers .= "X-MSMail-Priority: High \n";

        $CR_Mail = TRUE;
        $CR_Mail = @mail ($to, $Subject, $mail_Data, $headers);
        if ($CR_Mail === FALSE) $error = "Erreur lors de l'envoi du mail, veuillez r&eacute;-essayer.";
        else $success = "Message envoy&eacute; avec succ&egrave;s ! ";
        $success = "Message envoy&eacute; avec succ&egrave;s ! ";
    }
    if(isset($error))
    {
        echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>Oops ! </strong>' . $error . '</div>';
    }
    elseif (isset($success))
    {
        echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><strong>G&eacute;nial ! </strong>' . $success . '</div>';
    }
}
?>
