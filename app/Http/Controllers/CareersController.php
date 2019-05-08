<?php

namespace App\Http\Controllers;

use App\Career;
use App\Http\Services\LogService;
use App\Http\Services\MailerService;
use App\Http\Services\MailTemplateCreatorService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CareersController extends Controller
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Career::all();

        return view('pages.careers.careers_list', [
            'jobs' => $jobs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            // return view with form for creating job
            return view('pages.careers.careers_create');

        }catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'CareersController - create: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeJob(Request $request)
    {
        // TODO issues with try/catch block and data validation
        // create career object
        $job = new Career();

        // set request data to session so that it can be used fo old input if neccessary
        $request->flash();

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        // if data is ok, set new values to the model object
        $job->title = $request->input('title');
        $job->body = $request->input('body');

        // save model
        $job->save();

        // redirect with message
        return redirect('careers')->with([
            'message' => 'Job successfully added'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        try {
            // get specific user
            $job = Career::findOrFail($id);

            // return edit admin form view with admin data
            return view('pages.careers.careers_edit', [
                'job' => $job
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', 'CareersController - edit: ' . $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // TODO issues with try/catch block and data validation
        // get specific admin
        $job = Career::findOrFail($id);

        // set request data to session so that it can be used for old input if neccessary
        $request->flash();

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        // if data is ok set new values to the model
        $job->title = $request->input('title');
        $job->body = $request->input('body');

        // save model
        $job->save();

        // redirect with message
        return redirect('careers')->with([
            'message' => 'Job successfully edited'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
