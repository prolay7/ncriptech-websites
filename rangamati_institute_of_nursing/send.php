<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'php_mailer/Exception.php';
require 'php_mailer/PHPMailer.php';
require 'php_mailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'waytoadmissions21@gmail.com';                     //SMTP username
    $mail->Password   = 'lgle pkre mzzy sebw';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('waytoadmissions21@gmail.com', 'contact form');
    $mail->addAddress('ananyachoudhury32@gmail.com', 'ananya');     //Add a recipient
 


    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Test contact form';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';
 
    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}