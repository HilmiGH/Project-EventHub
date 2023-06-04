<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UmumController;
use App\Http\Controllers\SearchPageController;

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
    return view('welcome');
});

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('umum', 'App\Http\Controllers\UmumController@index');

Route::get('/mc/{nama}', 'App\Http\Controllers\McController@index');

Route::get('signin', 'App\Http\Controllers\SignInController@signin');
Route::get('signup', 'App\Http\Controllers\SignUpController@signup');

Route::get('/TopMC', 'App\Http\Controllers\TopMCController@TopMC');
Route::get('/UpcomingEvent', 'App\Http\Controllers\UpcomingEventController@upcomingEvent');

Route::get('/EditProfile', 'App\Http\Controllers\UmumController@editProfile');
Route::post('/EditProfile/update', 'App\Http\Controllers\UmumController@update');

Route::get('search-results', 'App\Http\Controllers\SearchPageController@index');
Route::get('userUmum', 'App\Http\Controllers\UserUmumController@getData');
Route::get('search-results/search', 'App\Http\Controllers\SearchPageController@searchMCEvent');
// Route::get('search-results/filter', 'App\Http\Controllers\FilterController@filterData');
Route::get('search-results/filter', [SearchPageController::class, 'filter'])->name('filter');


//dev
// Route::get('/landingpage', 'App\Http\Controllers\LandingPageController@landingPage');
Route::get('/landingpage', 'App\Http\Controllers\LandingPageController@index');
Route::get('/landingpage/myprofile', 'App\Http\Controllers\LandingPageController@myProfile');
Route::get('/landingpage/editprofile', 'App\Http\Controllers\LandingPageController@editProfile');

Route::get('/landingpage/detailedinfo', 'App\Http\Controllers\LandingPageController@detailedInfo');
Route::get('/landingpage/morerating', 'App\Http\Controllers\LandingPageController@moreRating');
Route::get('/landingpage/addrating', 'App\Http\Controllers\LandingPageController@addRating');