<?php

namespace App\Jobs;

use App\Http\Services\LogService;
use App\Http\Services\MailerService;
use App\Mail\MailToSend;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $mail;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(MailToSend $mail)
    {
        $this->mail = $mail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
//        $mailer = new MailerService(new LogService());
//        $mailer->sendEmail('New contact message from website', env('ADMIN_EMAIL'), "");
    }
}
