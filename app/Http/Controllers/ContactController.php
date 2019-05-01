<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Services\LogService;
use App\Http\Services\MailerService;
use App\Http\Services\UploadService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ContactController extends Controller
{
    private $logService;
    private $mailer;
    private $uploader;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
        $this->mailer = new MailerService($logService);
        $this->uploader = new UploadService($logService);
    }

    /**
     * Send contact info to super admin   -->  /contact
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleContactInfo(Request $request) {

        try {
            // check if neccessary values are entered correctly, if no return error messages
            $request->validate([
                'name' => 'required|max:45',
                'lastname' => 'required|max:45',
                'email' => 'required|max:45|',
                'title' => 'in:Mr.,Mrs.',
                'message' => 'required'
            ]);

            // get corresponding mail template
            $view = View::make('parts.contact_mail_template', [
                'title' => $request->input('title'),
                'name' => $request->input('name'),
                'lastname' => $request->input('lastname'),
                'email' => $request->input('email'),
                'message' => $request->input('message')
            ]);
            $template = $view->render();

            // send mail to Rizah
            $this->mailer->sendEmail('New contact message from website', env('ADMIN_EMAIL'), $template);

            // return message
            return back()->with('message', 'Contact message successfully sent.');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error message
            return back()->withErrors('message', 'Contact message couldnt be sent.');
        }

    }


    /**
     * Send bussiness contact message
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function handleBussinessInfo(Request $request) {

        try {

            // set data to session in order to use in input fields if invalid data is sent
            $request->flash();

            // validate form
            $request->validate([
                'bussiness_name' => 'required',
                'bussiness_subject' => 'required',
                'bussiness_email' => 'required|email',
                'bussiness_message' => 'required'
            ]);

            // save uploaded file/s if they are sent TODO file sizes will be handled in php.ini
            $attachment = false;
            if (file_exists($_FILES['files']['tmp_name'][0])) {

                // generate name
                $folderName = rand(1,10000);

                // make folder where contact files will temporary be located
                mkdir("temp_files/" . $folderName, 0777, true);

                $path = "temp_files/" . $folderName;
                $this->uploader->uploadFiles($_FILES, $path);
                $attachment = true;
            }

            // create corresponding mail template
            $view = View::make('parts.bussiness_mail_template', [
                'name' => $request->input('bussiness_name'),
                'subject' => $request->input('bussiness_subject'),
                'email' => $request->input('bussiness_email'),
                'message' => $request->input('bussiness_message')
            ]);
            $template = $view->render();

            // send email to Rizah
            $this->mailer->sendEmail('Bussiness contact', env('ADMIN_EMAIL'), $template, $attachment, $folderName);

            // return message
            return back()->with('message', 'Contact message successfully sent.');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error message
            return back()->withErrors('message', 'Contact message couldnt be sent.');
        }

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
