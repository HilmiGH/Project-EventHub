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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/edit', [SeputarProfileController::class, 'myProfile']);
Route::get('/landingpage/myprofile', [SeputarProfileController::class, 'myProfile']);

Route::get('/landingpage', [LandingPageController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/myprofile', [ProfileController::class, 'myprofile']);
});

Route::get('/Search', 'App\Http\Controllers\SearchPageController@searchpage');

Route::get('/TopMC', 'App\Http\Controllers\TopMCController@TopMC');
Route::get('/UpcomingEvent', 'App\Http\Controllers\UpcomingEventController@upcomingEvent');

Route::get('search-results', 'App\Http\Controllers\SearchPageController@index');
Route::get('userUmum', 'App\Http\Controllers\UserUmumController@getData');
Route::get('search-results/search', 'App\Http\Controllers\SearchPageController@searchMCEvent');

Route::get('search-results/filter', [SearchPageController::class, 'filter'])->name('filter');

Route::get('/landingpage/detailedinfo/{id}', 'App\Http\Controllers\ProfileController@showProfile')->name('profile.show');

Route::get('/landingpage/morerating', 'App\Http\Controllers\LandingPageController@moreRating');
Route::get('/landingpage/addrating', 'App\Http\Controllers\LandingPageController@addRating');

Route::get('/FullProfileEvent/{id}', 'App\Http\Controllers\FullProfileEventController@showEventProfile')->name('event.show');;
Route::get('/EditEvent', 'App\Http\Controllers\EditEventController@editevent');
Route::post('/EditEvent/update', 'App\Http\Controllers\EditEventController@update');

require __DIR__.'/auth.php';
