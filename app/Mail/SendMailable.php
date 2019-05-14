<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendMailable extends Mailable
{
    use Queueable, SerializesModels;

    //private $viewTemplate;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct() // $viewTemplate
    {
        //$this->viewTemplate = $viewTemplate;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //return $this->view($this->viewTemplate);
    }
}
