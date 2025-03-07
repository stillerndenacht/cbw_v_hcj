<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once 'PHPMailer/src/Exception.php';
require_once 'PHPMailer/src/PHPMailer.php';
require_once 'PHPMailer/src/SMTP.php';

function sendEmail($an, $subject, $body) {
	
	$von = ['info@++++++.de', 'M W T'];
	
	$mail = new PHPMailer(true);
	$mail->isSMTP();
	$mail->SMTPAuth = true;
	
	$mail->Host = "smtp.1und1.de";
	$mail->Port = 587;
	$mail->Username = "info@++++++.de";
	$mail->Password = "+++++++";
	$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
	
	$mail->setFrom($von[0], $von[1]);
	$mail->addAddress($an);
	$mail->Subject = $subject;
	$mail->Body = $body;
	
	$mail->isHTML(true);
	$mail->CharSet = 'UTF-8';
	$mail->Encoding = 'base64';

	try {
		$mail->send();
		echo 'Email wurde versendet.';
	} catch (Exception $e) {
		echo $e->getMessage();
		die;
	}
}





















#sendEmail('manfred.walter.thoma@gmail.com', 'Das ist das Subject...', 'Hier der <b>BODY</b> in HTML');


/*
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'C:/PHPMailer/src/Exception.php';
require 'C:/PHPMailer/src/PHPMailer.php';
require 'C:/PHPMailer/src/SMTP.php';
#$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
// Persönliche Angaben
$mail->Host = "smtp.1und1.de";
$mail->Port = 587;
$mail->Username = "info@bugbomb.de";
$mail->Password = "k7q4.pq";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

$mail->setFrom('info@bugbomb.de', 'Bugbomb');
// Empfänger, optional kann der Name mit angegeben werden
$mail->addAddress('manfred.walter.thoma@gmail.com');
// Kopie
#$mail->addCC('info@example.com');
// Blindkopie
#$mail->addBCC('info@example.com', 'name');

$mail->isHTML(true);
// Betreff
$mail->Subject = 'Der Betreff Ihrer Mail';
// HTML-Inhalt
$mail->Body = 'Der Text Ihrer Mail als HTML-Inhalt. Auch <b>fettgedruckte</b> Elemente sind beispielsweise erlaubt.';
$mail->AltBody = 'Der Text als simples Textelement';

$mail->CharSet = 'UTF-8';
$mail->Encoding = 'base64';

$mail->send();

*/
