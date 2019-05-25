<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

            // get last 4 blogs which are published
            $blogs = DB::select(
                'SELECT     
                          b.id,
                          bt.heading, 
                          bt.text,
                          b.image_path,
                          u.name, 
                          u.lastname, 
                          DATE_FORMAT(b.created_at, \'%M %d, %Y\') AS created_at
                        FROM blogs AS b
                        LEFT JOIN users AS u ON b.users_id = u.id
                        LEFT JOIN blog_translations AS bt ON b.id = bt.blogs_id
                        WHERE b.deleted_at IS NULL
                        AND b.published = "true"
                        GROUP BY b.id
                        ORDER BY b.created_at DESC
                        LIMIT 4');

            return view('index', [
                'blogs' => $blogs
            ]);

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

    /**
     * Display XLF page
     */
    public function showXlfPage() {

        try {

            return view('pages.xliff');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showXlfPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Display Careers page
     */
    public function showCareersPage() {

        try {

            return view('pages.careers.careers');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showCareersPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

}
