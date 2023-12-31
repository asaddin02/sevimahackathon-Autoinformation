<?php

use App\Http\Controllers\AutoaiController;
use App\Http\Controllers\RegisController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;

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

Route::post('/quote', [AutoaiController::class,'index'])->name('quote.index');
Route::post('/schedule', [AutoaiController::class,'schedule'])->name('schedule.random');
Route::post('/task', [AutoaiController::class,'task'])->name('task.random');
Route::post('/convert', [AutoaiController::class,'convert'])->name('convert.file');
Route::post('/daftar',[RegisController::class,'index'])->name('register.authuser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
