<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Services\LogService;
use App\Http\Services\MailerService;
use App\Http\Services\MailTemplateCreatorService;
use App\Http\Services\UploadService;
use App\Jobs\SendEmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Queue;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    private $logService;
    private $mailer;
    private $uploader;
    private $mailTemplateCreator;

    public function __construct(LogService $logService, MailTemplateCreatorService $mailTemplateCreator)
    {
        $this->logService = $logService;
        $this->mailer = new MailerService($logService);
        $this->uploader = new UploadService($logService);
        $this->mailTemplateCreator = $mailTemplateCreator;
    }

    /**
     * Send contact info to super admin   -->  /contact
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleContactInfo(Request $request) {

        // TODO issues with try/catch block and data validation
        // set request data to session so that it can be used for old input if neccessary
        $request->flash();

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'name' => 'required|max:45',
            'lastname' => 'required|max:45',
            'email' => 'required|max:45|',
            'subject' => 'required|max:255',
            'message' => 'required'
        ]);

        // get corresponding mail template
        $template = $this->mailTemplateCreator->createTemplateFromView('parts.contact_mail_template', [
            'title' => $request->input('title'),
            'name' => $request->input('name'),
            'lastname' => $request->input('lastname'),
            'email' => $request->input('email'),
            'subject' => $request->input('subject'),
            'message' => $request->input('message')
        ]);

        // send mail to Rizah
        // $this->mailer->sendEmail('New contact message from website', env('ADMIN_EMAIL'), $template);

        // TODO push mail to queue
        // dispatch(new SendEmailJob($template, null));
        $user = User::where('id', 1)->first();
        Queue::push(new SendEmail($user));

        // return message
        return back()->with('message', 'Contact message successfully sent.');
    }


    /**
     * Send bussiness contact message
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleBussinessInfo(Request $request) {

        // TODO issues with try/catch block and data validation
        // set data to session in order to use in input fields if invalid data is sent
        $request->flash();

        // validate form
        $request->validate([
            'bussiness_name' => 'required',
            'bussiness_subject' => 'required',
            'bussiness_email' => 'required|email',
            'bussiness_message' => 'required'
        ]);

        // save uploaded file/s if they are sent TODO file sizes and count will be handled in php.ini
        $attachment = false;
        if (file_exists($_FILES['files']['tmp_name'][0])) {

            // generate new folder name
            $folderName = rand(1,10000);

            // make folder where contact files will temporary be located
            mkdir("temp_files/" . $folderName, 0777, true);

            $path = "temp_files/" . $folderName;
            $this->uploader->uploadFiles($_FILES, $path);
            $attachment = true;
        }

        // get corresponding mail template
        $template = $this->mailTemplateCreator->createTemplateFromView('parts.bussiness_mail_template', [
            'name' => $request->input('bussiness_name'),
            'subject' => $request->input('bussiness_subject'),
            'email' => $request->input('bussiness_email'),
            'message' => $request->input('bussiness_message')
        ]);

        // send email to Rizah
        $this->mailer->sendEmail('Bussiness contact', env('ADMIN_EMAIL'), $template, $attachment, $folderName);

        // return message
        return back()->with('message', 'Bussiness contact message successfully sent.');
    }

    /**
     * Send outsourcing info to super admin
     *
     * @param Request $request
     */
    public function handleOutsourcingInfo(Request $request) {

        try {
            die("outsourcing info");
        } catch (\Exception $e) {

        }
    }

    /**
     * Send careers info to super admin
     *
     * @param Request $request
     */
    public function handleCareersInfo(Request $request) {

        try {
            die("careers info");
        } catch (\Exception $e) {

        }
    }
}
