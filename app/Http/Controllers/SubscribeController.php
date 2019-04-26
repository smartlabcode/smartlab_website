<?php

namespace App\Http\Controllers;

use App\Http\Services\MailchimpService;
use App\Http\Services\MailerService;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function saveSubscriber(Request $request, MailerService $mailer) {

        $request->validate([
            'email' => 'required|max:45|unique:subscribers',
            'language' => 'in:en,de,bs'
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');
        $subscriber->language = $request->input('language');

        $subscriber->save();

        // send verification email
        $mailer->sendVerificationEmail($subscriber->email, $subscriber->id);

        return back()->with(['message' => 'You successfully subscribed to our newsletter.']);
    }

    public function verifySubscriber($mail, MailchimpService $mailchimp) {

        $subscriber = Subscriber::where('email', $mail)->firstOrFail();

        $subscriber->verified = 1;
        $subscriber->save();

        // send data to MailChimp
        $mailchimp->addSubscriber($mail);

        return view('others.email_verification');
    }

    public function listSubscribers(MailchimpService $mailchimp) {
        $data = $mailchimp->listSubscribers();

        return view('pages.subscribers', ['subscribers' => $data]);
    }
}
