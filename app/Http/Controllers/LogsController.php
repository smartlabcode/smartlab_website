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

    /**
     * List all los from the system
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
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
            $this->logService->setLog('ERROR', 'LogsController - index: '. $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }
}
