<?php
include 'mail.php';

$from_email = "CDR Request"; //sender email
$recipient_email = "emmanuel.gamor@vodafone.com"; //recipient email
//$cc = 'emmanuel.gamor@vodafone.com';
$cc = "emmanuel.gamor@vodafone.com";
$subject = "Test mail"; //subject of email
$message = "This is body of the message"; //message body

mailer($from_email,$recipient_email,$subject,$message,$cc);
//echo mailer();
?>