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

Route::get('/mc/{nama}', 'App\Http\Controllers\McController@index');

Route::get('signin', 'App\Http\Controllers\SignInController@signin');
Route::get('signup', 'App\Http\Controllers\SignUpController@signup');
Route::get('signupmc', 'App\Http\Controllers\SignUpMcController@signupmc');
Route::get('signupeo', 'App\Http\Controllers\SignUpEoController@signupeo');

Route::get('/TopMC', 'App\Http\Controllers\TopMCController@TopMC');
Route::get('/UpcomingEvent', 'App\Http\Controllers\UpcomingEventController@upcomingEvent');

Route::get('/Search', 'App\Http\Controllers\SearchPageController@searchpage');

Route::get('/landingpage', 'App\Http\Controllers\LandingPageController@index');
Route::get('/', 'App\Http\Controllers\LandingPageController@index');

Route::get('search-results', 'App\Http\Controllers\SearchPageController@index');
Route::get('userUmum', 'App\Http\Controllers\UserUmumController@getData');
Route::get('search-results/search', 'App\Http\Controllers\SearchPageController@searchMCEvent');
// Route::get('search-results/filter', 'App\Http\Controllers\FilterController@filterData');
Route::get('search-results/filter', [SearchPageController::class, 'filter'])->name('filter');

Route::get('/landingpage/myprofile/{id}', 'App\Http\Controllers\ProfileController@myProfile');
Route::get('/landingpage/editprofile/{id}', 'App\Http\Controllers\ProfileController@editProfile');
Route::post('/landingpage/myprofileUpdate', 'App\Http\Controllers\ProfileController@myProfileUpdate');

Route::get('/landingpage/editprofilemc', 'App\Http\Controllers\ProfileController@editProfileMC');
Route::post('/landingpage/myprofilemc', 'App\Http\Controllers\ProfileController@myProfileMC');
Route::get('/landingpage/myprofilemc', 'App\Http\Controllers\ProfileController@myProfileMC');

Route::get('/landingpage/editprofileeo', 'App\Http\Controllers\ProfileController@editProfileEO');
Route::post('/landingpage/myprofileeo', 'App\Http\Controllers\ProfileController@myProfileEO');
Route::get('/landingpage/myprofileeo', 'App\Http\Controllers\ProfileController@myProfileEO');

Route::get('/landingpage/detailedinfo', 'App\Http\Controllers\LandingPageController@detailedInfo');
Route::get('/landingpage/morerating', 'App\Http\Controllers\LandingPageController@moreRating');
Route::get('/landingpage/addrating', 'App\Http\Controllers\LandingPageController@addRating');
