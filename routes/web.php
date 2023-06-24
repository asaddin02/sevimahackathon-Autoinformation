<?php

use App\Http\Controllers\AutoaiController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     Artisan::call('inspire');
//     $quote = trim(Artisan::output());

//     // return view('quote', ['quote' => $quote]);
//     dd($quote);
// });

Route::post('/quote', [AutoaiController::class,'index'])->name('quote.index');
Route::post('/schedule', [AutoaiController::class,'schedule'])->name('schedule.random');
Route::post('/task', [AutoaiController::class,'task'])->name('task.random');
Route::post('/convert', [AutoaiController::class,'convert'])->name('convert.file');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
