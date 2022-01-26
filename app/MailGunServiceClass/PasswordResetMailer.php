<?php

namespace App\MailGunServiceClass;
require 'PHPMailerAutoload.php';
use GuzzleHttp\Psr7\Message;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Validator;

class PasswordResetMailer
{

    public function mailer($emailDetails)
    {

        $mail = new PHPMailer;

        $mail->isSMTP();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.mailgun.org';                     // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'postmaster@YOUR_DOMAIN_NAME';   // SMTP username
        $mail->Password = 'secret';                           // SMTP password
        $mail->SMTPSecure = 'tlhttps://www.mailgun.com/email-apis';                            // Enable encryption, only 'tls' is accepted

        $mail->From = 'chisom5710@gmail.com';
        $mail->FromName = 'Intern Finder';
        $mail->addAddress('bar@example.com');                 // Add a recipient

        $mail->WordWrap = 50;                                 // Set word wrap to 50 characters

        $mail->Subject = 'Hello';
        $mail->Body    = $emailDetails['url'];

        if (!$mail->send()) {
            return response()->json($mail->ErrorInfo);
        } else {
            return response()->json($mail);
        }
    }
}
