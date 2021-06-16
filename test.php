<?php

require_once "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true;
$mail->Username = 'abhishekbhatnagar1999@gmail.com';
$mail->Password = '123@Abc1999';
$mail->setfrom('abhishekbhatnagar1999@gmail.com');
$mail->addaddress('abhishekbhatnagar1999@gmail.com');
$mail->Subject = 'Testing email function';
$mail->Body    = 'Hi this is testing for the PHPMailer function';
$mail->send();



?>