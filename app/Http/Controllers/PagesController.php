<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use Illuminate\Http\Request;

class PagesController extends Controller
{

    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Display index page
     */
    public function index() {

        try {

            return view('index');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - index: '. $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Display courses page
     */
    public function showCoursesPage() {

        try {

            return view('pages.courses');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showCoursesPage: '. $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Display animations page
     */
    public function showAnimationsPage() {

        try {

            return view('pages.animations');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showAnimationsPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Display programming page
     */
    public function showProgrammingPage() {

        try {

            return view('pages.programming');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showProgrammingPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Display moodle page
     */
    public function showMoodlePage() {

        try {

            return view('pages.moodle');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showMoodlePage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

}
