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
        'update',
        'edit'
    ]);

    Route::get('/blogs/{id}/add/{lang}', 'BlogsController@add')->name('add_extra_language_blog');
    Route::get('/blogs/{id}/edit/{lang}', 'BlogsController@edit')->name('edit_language_blog');


    Route::put('/blogs/{id}/{lang}', 'BlogsController@update');

    Route::put('/publish/{id}/{state}', 'BlogsController@publish');

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

