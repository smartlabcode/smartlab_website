<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubscribeController extends Controller
{
    public function saveSubscriber(Request $request) {

        $request->validate([
            'email' => 'required|max:45'
        ]);

        return back()->with(['message' => 'You successfully subscribed to our newsletter.']);
    }
}
