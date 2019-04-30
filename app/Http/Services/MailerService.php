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

    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Mail sender function
     *
     * @param $subject
     * @param $recipient
     * @param $emailBody
     */
    public function sendEmail($subject, $recipient, $emailBody, $attachment = false, $contactType = false) {

        // create PHPMailer object
        $mail = new PHPMailer(true);

        try {
            // set object properties
            $mail->isSMTP();
            $mail->Host = env('MAIL_HOST');
            $mail->SMTPAuth = true;
            $mail->Username = env('MAIL_USERNAME');
            $mail->Password = env('MAIL_PASSWORD');
            $mail->SMTPSecure = 'tls';
            $mail->Port = env('MAIL_PORT');
            $mail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $mail->addAddress($recipient, 'Receiver');     // Add a recipient
            //Content
            $mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $emailBody;
            $mail->AltBody = 'Your email provider doesnt support sending HTML mails.';

            // check if attachment will be set
            if ($attachment) {
                // zip all files from temp_files folder
                $this->zip();

                // add attachment to the email
                $mail->addAttachment('temp_files/contact.zip', 'Contact_attachment.zip');
            }

            // send email
            $mail->send();

            // if mail is sent delete all from temp_files
            if ($attachment) {
                $this->delete();
            }

        } catch (Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $mail->ErrorInfo);
        }

    }


    private function zip() {
        $zip = new \ZipArchive();
        $zip->open('temp_files/contact.zip', \ZipArchive::CREATE);
        foreach (glob("temp_files/*") as $file) {
            $zip->addFile($file);
            //if ($file != 'target_folder/important.txt') unlink($file);
        }
        $zip->close();
    }


    private function delete() {
        foreach (glob("temp_files/*") as $file) {
            unlink($file);
        }
    }

}