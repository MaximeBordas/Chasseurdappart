<?php
/**
 * Created by PhpStorm.
 * User: maxime
 * Date: 26/06/2018
 * Time: 10:02
 */

    if(isset($_POST['submit'])) {
        $mailFrom = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $mailTo = "tonMailPerso@tonfourniseur.fr";
        $headers = "De: ".$mailFrom;
        $txt = "le message est : \n\n".$message;

        mail($mailTo,$subject,$txt,$headers);
        header('Location: index.php?mailSend');
    }