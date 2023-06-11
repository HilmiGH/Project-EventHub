<?php
use App\Http\Controllers\SeputarProfileController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/mc/{nama}', 'App\Http\Controllers\McController@index');

Route::get('/Search', 'App\Http\Controllers\SearchPageController@searchpage');

Route::get('/TopMC', 'App\Http\Controllers\TopMCController@TopMC');
Route::get('/UpcomingEvent', 'App\Http\Controllers\UpcomingEventController@upcomingEvent');

Route::get('search-results', 'App\Http\Controllers\SearchPageController@index');
Route::get('userUmum', 'App\Http\Controllers\UserUmumController@getData');
Route::get('search-results/search', 'App\Http\Controllers\SearchPageController@searchMCEvent');

Route::get('search-results/filter', [SearchPageController::class, 'filter'])->name('filter');

Route::get('/landingpage/detailedinfo', 'App\Http\Controllers\LandingPageController@detailedInfo');
Route::get('/landingpage/morerating', 'App\Http\Controllers\LandingPageController@moreRating');
Route::get('/landingpage/addrating', 'App\Http\Controllers\LandingPageController@addRating');
