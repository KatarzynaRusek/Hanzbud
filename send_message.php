<?php

 	$from = $_POST["name"];
	$from_mail = $_POST["email"];
	$phone = $_POST["phone"];
	$subject_from = $from . " " . $from_mail . " " . $phone;
	$message = $_POST["message"];
	$naglowek = "From: kontakt@hanzbud.ugu.pl";

	mail("szymon3301@gmail.com", $subject_from, $message, $naglowek);
	unset($_POST);
	header("Location: contact.html");


?>
