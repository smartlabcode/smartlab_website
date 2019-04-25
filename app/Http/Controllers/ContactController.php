<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function handleContactInfo(Request $request) {

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'name' => 'required|max:45',
            'lastname' => 'required|max:45',
            'email' => 'required|max:45',
            'title' => 'in:Mr.,Mrs.',
            'message' => 'required'
        ]);

        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->lastname = $request->input('lastname');
        $contact->title = $request->input('title');
        $contact->message = $request->input('message');
        $contact->email = $request->input('email');

        $contact->save();

        return back()->with('message', 'Message successfully sent.');
    }
}
