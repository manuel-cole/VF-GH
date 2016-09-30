<?php
ob_start();
session_start();
include 'functions.php';
include_once 'email_message.php';

$logo = "http://vodafone.com.gh/templates/vodtpl/images/logo2.png";
$user_email = $_SESSION['user_email'];
$name = $_SESSION['name'];

$user_message = user_message($logo,$name);

send_mail_user($user_message,$user_email);

session_destroy();
header('location: index.php');
exit();
?>