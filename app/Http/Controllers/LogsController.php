<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use App\Log;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    public function index() {

        try {
            // get logs
            $logs = Log::orderBy('created_at', 'desc')->get();

            // return view with data
            return view('pages.logs', [
                'logs' => $logs
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERRROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }
}
