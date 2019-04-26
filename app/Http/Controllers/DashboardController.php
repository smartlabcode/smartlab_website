<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        try {

            return view('dashboard');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERRROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }
}
