<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SujetController;
use App\Http\Controllers\StatController;


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
    return view('home');
});

Route::post('/search', [SujetController::class, 'search'])->name('search');

Route::resource('sujets', SujetController::class);
Route::resource('statSujet', StatController::class);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


