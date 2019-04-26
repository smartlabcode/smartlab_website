<?php

namespace App\Http\Controllers;

use App\Log;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function index() {
        // get logs
        $logs = Log::orderBy('created_at', 'desc')->get();

        // return view with data
        return view('pages.logs', [
            'logs' => $logs
        ]);
    }
}
