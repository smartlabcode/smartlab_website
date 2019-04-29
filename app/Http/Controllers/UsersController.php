<?php

namespace App\Http\Controllers;

use App\Http\Services\LogService;
use App\Http\Services\MailerService;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

class UsersController extends Controller
{
    private $logService;

    public function __construct(LogService $logService)
    {
        $this->logService = $logService;
    }

    /**
     * Display a listing of the resource.  --->  /admins
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            // get all undeleted users
            $admins = User::where('deleted_at', null)->get();

            // return view with users
            return view('pages.admins.admins_list', [
                'admins' => $admins
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Show the form for creating a new resource.  --->  /admins/create
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            // return view with form for creating admin
            return view('pages.admins.admins_create');

        }catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }

    }

    /**
     * Store a newly created resource in storage.  --->  /admins
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // create user object
        $admin = new User();

        // set request data to session so that it can be used fo old input if neccessary
        $request->flash();

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'name' => 'required|max:45',
            'lastname' => 'required|max:45',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'role' => 'in:1,2'
        ]);

        // if data is ok, set new values to the model object
        $admin->name = $request->input('name');
        $admin->lastname = $request->input('lastname');
        $admin->email = $request->input('email');
        $admin->password = Hash::make($request->input('password'));
        $admin->roles_id = $request->input('role');

        // save model
        $admin->save();

        // create mailer object
        $mailer = new MailerService(new LogService());

        // get corresponding mail template
        $view = View::make('parts.admin_mail_template', [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ]);
        $template = $view->render();

        // send mail to new admin
        $mailer->sendEmail('Smartlab Admin', $request->input('email'), $template);

        // redirect with message
        return redirect('admins')->with([
            'message' => 'Admin successfully added'
        ]);
    }

    /**
     * Show the form for editing the specified resource.  --->  /admins/{id}/edit
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            // get specific user
            $admin = User::findOrFail($id);

            // return edit admin form view with admin data
            return view('pages.admins.admins_edit', [
                'admin' => $admin
            ]);

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return error view
            return view('pages.general_error');
        }
    }

    /**
     * Update the specified resource in storage.  --->  /admins/{id}
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // get specific admin
        $admin = User::findOrFail($id);

        // set request data to session so that it can be used for old input if neccessary
        $request->flash();

        // check if neccessary values are entered correctly, if no return error messages
        $request->validate([
            'name' => 'required|max:45',
            'lastname' => 'required|max:45',
            'role' => 'in:1,2'
        ]);

        // if data is ok set new values to the model
        $admin->name = $request->input('name');
        $admin->lastname = $request->input('lastname');
        $admin->roles_id = $request->input('role');

        // save model
        $admin->save();

        // redirect with message
        return redirect('admins')->with([
            'message' => 'Admin successfully edited'
        ]);
    }

    /**
     * Remove the specified resource from storage.  --->  /admins/{id}
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try {
            // get specific admin
            $admin = User::findOrFail($id);
            // force deleting admin even it table is adjusted for soft deletes
            $admin->forceDelete();

            // return with message
            $request->session()->flash('message', 'Admin successfully deleted.');

        } catch (\Exception $e) {
            // add log
            $this->logService->setLog('ERROR', $e->getMessage());

            // return with message
            $request->session()->flash('error', 'Admin couldnt be deleted.');
        }
    }

}
