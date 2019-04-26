<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Http\Services\LogService;
use App\Http\Services\MailerService;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    public function handleContactInfo(Request $request, MailerService $mailer) {

        try {
            // check if neccessary values are entered correctly, if no return error messages
            $request->validate([
                'name' => 'required|max:45',
                'lastname' => 'required|max:45',
                'email' => 'required|max:45',
                'title' => 'in:Mr.,Mrs.',
                'message' => 'required'
            ]);

            // create model and set its values
            $contact = new Contact();
            $contact->name = $request->input('name');
            $contact->lastname = $request->input('lastname');
            $contact->title = $request->input('title');
            $contact->message = $request->input('message');
            $contact->email = $request->input('email');

            $contact->save();

            // send mail to the user
            $mailer->sendContactEmail();

            // return message
            return back()->with('message', 'Contact message successfully sent.');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERRROR', $e->getMessage());

            // return error message
            return back()->with('message', 'Contact message couldnt be sent.');
        }

    }
}
