<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use App\Team;
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
    public function index()
    {

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
                        LIMIT 4'
            );

            $teamMembers = Team::all();

            return view('index', [
                'blogs' => $blogs,
                'teamMembers' => $teamMembers
            ]);
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - index: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Display courses page
     */
    public function showCoursesPage()
    {

        try {

            return view('pages.courses');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showCoursesPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Display animations page
     */
    public function showAnimationsPage()
    {

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
    public function showProgrammingPage()
    {

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
    public function showMoodlePage()
    {

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
    public function showXlfPage()
    {

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
    public function showCareersPage()
    {

        try {

            return view('pages.careers.careers');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showCareersPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Display Partner page
     */
    public function showPartnerPage()
    {

        try {

            return view('pages.become_partner');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showPartnerPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Display Partner page
     */
    public function showOutsourcingPage()
    {

        try {

            return view('pages.outsourcing');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showOutsourcingPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }
    public function showOutsourcingProfilePage()
    {

        try {

            return view('pages.outsourcing_profile');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showOutsourcingProfilePage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }
    public function showProjectPage()
    {

        try {

            return view('pages.project');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showProjectPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }
    /**
     * Display Partner page
     */
    public function showXlfSignInPage()
    {

        try {

            return view('pages.xliff_signup_signin');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showXlfSignInPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Display careers elearning job page
     */
    public function showCareersElearningPage()
    {

        try {

            return view('pages.careers.elearning_job');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showCareersElearningPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Display careers developer job page
     */
    public function showCareersDeveloperPage()
    {

        try {

            return view('pages.careers.developer_job');
        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'PagesController - showCareersDeveloperPage: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }
}
