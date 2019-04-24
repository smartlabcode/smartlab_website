<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth'])->group(function() {
    // blog controllers
    Route::resource('blogs', 'BlogsController')->except([
        'update'
    ]);

    Route::put('/blogs/{id}/{lang}', 'BlogsController@update');

    // admin controllers
    Route::resource('admins', 'UsersController')->except([
        'show'
    ]);
});


// logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');  // https://stackoverflow.com/questions/43585416/how-to-logout-and-redirect-to-login-page-using-laravel-5-4

// pages
Route::get('/', 'PagesController@index');
Route::get('pages/courses', 'PagesController@showCoursesPage');
Route::get('pages/animations', 'PagesController@showAnimationsPage');
Route::get('pages/programming', 'PagesController@showProgrammingPage');
Route::get('pages/moodle', 'PagesController@showMoodlePage');

// other routes
Route::post('contact', 'ContactController@handleContactInfo');
Route::put('language', 'LanguagesController@switchLanguage');

Auth::routes(); // TODO ['register' => false]

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

