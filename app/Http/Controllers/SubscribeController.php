<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use App\Http\Services\MailchimpService;
use App\Http\Services\MailerService;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Save subscriber data
     *
     * @param Request $request
     * @param MailerService $mailer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function saveSubscriber(Request $request, MailchimpService $mailchimp) {

        try {
            // set request data to session so that it can be used for old input if neccessary
            $request->flash();

            // validate data
            $request->validate([
                'email' => 'required|max:45|unique:subscribers',
                'language' => 'in:en,de,bs'
            ]);

            // create subscriber object and set its data
            $subscriber = new Subscriber();
            $subscriber->email = $request->input('email');
            $subscriber->language = $request->input('language');

            // save subscriber
            $subscriber->save();

            // send data to MailChimp
            $mailchimp->addPendingSubscriber($request->input('email'));

            // return back and set message
            return back()->with([
                'message' => 'You successfully subscribed to our newsletter.'
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // redirect with message
            return back()->withErrors([
                'message' => 'Couldnt save subscriber data.'
            ]);
        }

    }

    /**
     * Get list of subscribers from MailChimp
     *
     * @param MailchimpService $mailchimp
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listSubscribers(MailchimpService $mailchimp) {

        try {
            // get subscribers
            $data = $mailchimp->listSubscribers();

            return view('pages.subscribers', [
                'subscribers' => $data
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }
}
