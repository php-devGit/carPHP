<?php

include_once './controllers/email/OAuth.php';
include_once './controllers/email/POP3.php';
include_once './controllers/email/SMTP.php';
include_once './controllers/email/PHPMailer.php';
include_once './controllers/email/Exception.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class Email
{
    function sendMail($message, $subject)
    {
        $mail = new PHPMailer(true);
        try {
            //Server settings
            //$mail->SMTPDebug = 2;
            $mail->CharSet = "utf-8";
            $mail->isSMTP();
            $mail->Host = 'smtp.mail.ru';
            $mail->SMTPAuth = true;
            $mail->Username = 'bilenko-i@list.ru';
            $mail->Password = '123456!a';
            $mail->SMTPSecure = 'tls';
            $mail->Port = 587;

            // Recipients
            $mail->setFrom('bilenko-i@list.ru', 'Система управления заказами');
            $mail->addAddress('bilenko-i@list.ru', 'Администратор');

            // Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body = $message;

            $mail->send();
        } catch (Exception $e) {
            var_dump('Message could not be sent. Mailer Error: ', $mail->ErrorInfo);
        }
    }
}