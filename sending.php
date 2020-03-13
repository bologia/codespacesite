<?php
session_start();

$mail = 'teddy.couaillier@gmail.com';

if (!preg_match("#^[a-z0-9.-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui présentent des bogues.
{
    $passage_ligne = "\r\n";
}
else
{
    $passage_ligne = "\n";
}

$message_txt = $_POST['message'];

$boundary = "-----=".md5(rand());
$boundary_alt = "-----=".md5(rand());

$subject = $_POST['subject'];

$header = "From: <".$_POST['mail'].">".$passage_ligne;
$header.= "Reply-to: <".$_POST['mail'].">".$passage_ligne;
$header.= "Content-Type: multipart/mixed;".$passage_ligne." boundary=".$boundary."".$passage_ligne;

$message = $passage_ligne."--".$boundary.$passage_ligne;
$message.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=".$boundary_alt."".$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt.$passage_ligne;
$message.= 'Content-Type: text/plain; charset="ISO-8859-1"'.$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
$message.= $passage_ligne."--".$boundary_alt."--".$passage_ligne;

if(mail($mail,$subject,$message,$header)) {
    $_SESSION["sending"] = true;
    header('Location: index.php');
    exit();
} else {
    $_SESSION["notsending"] = true;
    header('Location: index.php');
    exit();
}



