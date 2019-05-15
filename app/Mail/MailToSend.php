<?php

namespace App\Mail;

use App\Contact;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class MailToSend extends Mailable
{
    use Queueable, SerializesModels;

    private $contact;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //die(print_r(json_decode($this->contact)));
        $info = json_decode($this->contact);

        $d = [
            'name' => $info->name,
            'lastname' => $info->lastname,
            'email' => $info->email,
            'subject' => $info->subject,
            'message' => $info->message
        ];


        if (!is_null($info->file_path)) {
            return $this->from('noreply@smartlab.ba','No Reply')
                ->view("parts.contact_mail_template", ["data" => $d ])
                ->attachFromStorage($info->file_path)
                ->subject('New contact mail');
        } else {
            return $this->from('noreply@smartlab.ba','No Reply')
                ->view("parts.contact_mail_template", ["data" => $d ])
                ->subject('New contact mail');
        }

    }



}
