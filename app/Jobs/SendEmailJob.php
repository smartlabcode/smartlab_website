<?php

namespace App\Jobs;

use App\Mail\SendMailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendEmailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $viewTemplate;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($viewTemplate) //$schedule->command('queue:work --stop-when-empty --tries=2');
    {
        $this->viewTemplate = $viewTemplate;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        //Mail::to(env('ADMIN_EMAIL'))->send(new SendMailable($this->viewTemplate));
    }
}
