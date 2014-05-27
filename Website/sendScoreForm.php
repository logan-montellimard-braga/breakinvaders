<?php
if(isset($_POST['sendScoreForm']))
{
    if(empty($_POST['scoreName']) || strlen($_POST['scoreName']) < 2 || strlen($_POST['scoreName']) > 50 || empty($_POST['scoreEmail']) || strlen($_POST['scoreEmail']) > 255 || empty($_POST['scoreURL']) || strlen($_POST['scoreURL']) > 2000)
    {
        $error = "Les scores ne sont pas remplis correctement !";
    }
    else
    {
        $to    = "logancrossing@gmail.com";
        $from  = $_POST['scoreEmail'];
        $identite = $_POST['scoreName'];
        $message = $_POST['scoreURL'];

        $JOUR  = date("Y-m-d");
        $HEURE = date("H:i");

        $Subject = "SCORES BreakInvaders - $JOUR $HEURE";

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
        if ($CR_Mail === FALSE) $error = "Erreur lors de l'envoi des scores, veuillez r&eacute;-essayer.";
        else $success = "Score envoy&eacute; avec succ&egrave;s ! ";
        $success = "Score envoy&eacute; avec succ&egrave;s ! ";
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
