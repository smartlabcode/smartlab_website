<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 25/04/2019
 * Time: 12:31
 */

namespace App\Http\Services;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class MailerService
{

    public function sendContactEmail() {

        // TODO send email
        $mail = new PHPMailer(true);
        try {
            //Server settings
            //$mail->SMTPDebug = 2;                                 // Enable verbose debug output
            $mail->isSMTP();                                      // Set mailer to use SMTP
            $mail->Host = env('MAIL_HOST');                       // Specify main and backup SMTP servers
            $mail->SMTPAuth = true;                               // Enable SMTP authentication
            $mail->Username = env('MAIL_USERNAME');                 // SMTP username
            $mail->Password = env('MAIL_PASSWORD');                   // Password of the account from which emails are sended (in this case it is hashed)
            $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
            $mail->Port = env('MAIL_PORT');                                    // TCP port to connect to
            //Recipients
            $mail->setFrom('mirzao@smartlab.ba', 'SmartLab');
            $mail->addAddress('mirzaoglecevac@hotmail.com', 'Receiver');     // Add a recipient
            //Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Test message subject';
            $mail->Body    = '<div style="width: 300px; height: 200px; padding: 10px; font-size: 20px; text-align: center; color: #fff; background-color: green;"> HTML message sent from mirzao@smartlab.ba </div>';
            $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';  // if mail provider blocks HTML content set alternative body with no HTML
            $mail->send();
            echo 'Message has been sent';
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }

    }
}