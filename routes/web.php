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

Route::get('/', function () {
    return view('index');
});

// blog controllers
Route::resource('blogs', 'BlogsController');

// admin vontrollers
Route::resource('admins', 'UsersController')->except([
    'show'
]);

// pages
Route::get('pages/courses', 'PagesController@showCoursesPage');
Route::get('pages/animations', 'PagesController@showAnimationsPage');
Route::get('pages/programming', 'PagesController@showProgrammingPage');
Route::get('pages/moodle', 'PagesController@showMoodlePage');

Auth::routes(); // ['register' => false]

Route::get('/home', 'HomeController@index')->name('home');

