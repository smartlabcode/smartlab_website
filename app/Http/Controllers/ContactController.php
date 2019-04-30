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

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
        $this->mailer = new MailerService($logService);
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
     * Send bussiness info to super admin
     *
     * @param Request $request
     */
    public function handleBussinessInfo(Request $request, UploadService $uploadService, MailerService $mailerService) {

        try {

            // save uploaded file/s
            $uploadService->uploadFiles($_FILES);

            // send email to Rizah
            $mailerService->sendEmail('Bussiness contact', env('ADMIN_EMAIL'), '<div>Test B</div>', true);


        } catch (\Exception $e) {
            die($e->getMessage());
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
