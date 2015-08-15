<?php

session_start();

require_once('assets/libraries/PHPMailer/PHPMailerAutoload.php');

$contactName = $_POST['contactName'];
$contactEmail = $_POST ['contactEmail'];
$contactMsg = $_POST['contactMsg'];

$mail = new PHPMailer();
$mail -> isSMTP();
$mail -> Host = 'smtp.gmail.com';
$mail -> Port = 587;
$mail -> SMTPSecure = 'tls';
$mail -> SMTPAuth = true;
$mail -> Username = "admin.store@gmail.com";
$mail -> Password = "1a2b3c4d";
$mail -> setFrom("admin.store@gmail.com", "Admin");
$mail -> addAddress("admin.store@gmail.com");
$mail -> Subject = "Contact email from store";
$mail -> msgHTML("<html>by: {$contactName}<br />
						email: {$contactEmail}<br /><br />
						menssage: {$contactMsg}</html>");
$mail -> AltBody = "by: {$contactName}\n
					email: {$contactEmail}\n\n
					menssage: {$contactMsg}";

if($mail -> send()) {

	$_SESSION['success'] = "Menssage successfully sent!";

	header("Location: index.php");

} else {

	$_SESSION['danger'] = "Error sending message, ".$mail -> ErroInfo;

	header("Location: contact.php");

}

die();