<?php

namespace App\Http\Controllers;

use App\Http\Services\MailerService;
use App\Subscriber;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function saveSubscriber(Request $request, MailerService $mailer) {

        $request->validate([
            'email' => 'required|max:45|unique:subscribers'
        ]);

        $subscriber = new Subscriber();
        $subscriber->email = $request->input('email');

        $subscriber->save();

        // send verification email
        $mailer->sendVerificationEmail($subscriber->email, $subscriber->id);

        return back()->with(['message' => 'You successfully subscribed to our newsletter.']);
    }

    public function verifySubscriber($id) {

        $subscriber = Subscriber::findOrFail($id);

        $subscriber->verified = 1;
        $subscriber->save();

        // TODO send data to MailChimp

        return view('others.email_verification');
    }
}
