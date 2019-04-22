<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display courses page
     */
    public function showCoursesPage() {
        return view('pages.courses');
    }

    /**
     * Display animations page
     */
    public function showAnimationsPage() {
        return view('pages.animations');
    }

    /**
     * Display programming page
     */
    public function showProgrammingPage() {
        return view('pages.programming');
    }

    /**
     * Display moodle page
     */
    public function showMoodlePage() {
        return view('pages.moodle');
    }
}
