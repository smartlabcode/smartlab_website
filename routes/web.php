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

// for all of the routes in the following group user needs to be authenticated to see them

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'is_not_xlf_user'])->group(function () {

    // route for displaying page after admin logs in
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');

    // routes regarding the blog actions
    Route::resource('blogs', 'BlogsController')->except([
        'update',
        'edit',
        'show'
    ]);
    Route::get('/blogs/{id}/add/{lang}', 'BlogsController@add')->name('add_extra_language_blog');
    Route::get('/blogs/{id}/edit/{lang}', 'BlogsController@edit')->name('edit_language_blog');
    Route::put('/blogs/{id}/{lang}', 'BlogsController@update');
    Route::put('/publish/{id}/{state}', 'BlogsController@publish');

    // route for logs
    Route::get('logs', 'LogsController@index');

    // routes for editing website translations
    Route::get('translations', 'TranslationsController@index');
    Route::get('translations/edit/{file}', 'TranslationsController@edit');
    Route::put('translations', 'TranslationsController@update');

    // following routes are only accessible by the superadmin/s
    Route::middleware(['is_superadmin'])->group(function () {
        Route::get('subscribers', 'SubscribeController@listSubscribers');
        Route::resource('admins', 'UsersController')->except([
            'show',
            'store'
        ]);
        Route::post('admins/add', 'UsersController@store')->name('admins.store');

        // routes for careers
        Route::resource('careers', 'CareersController');
        Route::post('careers/store', 'CareersController@storeJob'); // TODO store route is not defined in resource at all - check this
    });
});

// logout route
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');  // https://stackoverflow.com/questions/43585416/how-to-logout-and-redirect-to-login-page-using-laravel-5-4

// pages routes
Route::get('/', 'PagesController@index');
Route::get('pages/courses', 'PagesController@showCoursesPage');
Route::get('pages/animations', 'PagesController@showAnimationsPage');
Route::get('pages/programming', 'PagesController@showProgrammingPage');
Route::get('pages/moodle', 'PagesController@showMoodlePage');
Route::get('pages/project', 'PagesController@showProjectPage');

// TODO new routes
Route::get('pages/careers', 'PagesController@showCareersPage');
Route::get('pages/careers/elearning', 'PagesController@showCareersElearningPage');
Route::get('pages/careers/developer', 'PagesController@showCareersDeveloperPage');

Route::get('pages/careers/multimedia', 'PagesController@showCareersMultimediaPage');
Route::get('pages/careers/moodle', 'PagesController@showCareersMoodlePage');
Route::get('pages/careers/frontenddev', 'PagesController@showCareersFrontDevPage');

Route::get('pages/partner', 'PagesController@showPartnerPage');
Route::get('pages/outsourcing', 'PagesController@showOutsourcingPage');
Route::get('pages/outsourcing_profile', 'PagesController@showOutsourcingProfilePage');
Route::get('pages/xlf', 'PagesController@showXlfPage');
Route::get('pages/xlf_signin', 'PagesController@showXlfSignInPage');
Route::post('xlf/signup', 'XlfUserController@register');
Route::post('xlf/signin', 'XlfUserController@login');


// route where contact info is sent
Route::post('contact', 'ContactController@handleContactInfo');
// route where bussiness info is sent
Route::post('bussiness', 'ContactController@handleBussinessInfo');
// route where demo meeting is sent
Route::post('demo', 'ContactController@handleDemoInfo');
// route where careers info is sent
Route::post('careers', 'ContactController@handleCareersInfo');

Route::get('schedule', function () {
    \Illuminate\Support\Facades\Artisan::call('schedule:run');

    return "ok";
});

// TODO user needs to be somehow logged in to use this
Route::post('/exporter', 'ExtractTermsFromXliffController@export');

// route for switching language
Route::put('language', 'LanguagesController@switchLanguage');

// route for subscribing to newsletters
Route::post('subscribe', 'SubscribeController@saveSubscriber');

// routes for editing website images
// Route::get('assets', 'ImagesController@index');
// Route::post('assets', 'ImagesController@update');

// authorization routes - register option is disabled
Auth::routes([
    //'register' => false
]);
