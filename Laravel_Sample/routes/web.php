<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

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
    return view('login');
});


// Auth::routes();

// Route::get('/',[DisplayController::class, 'index']);

Route::get('/login',[LoginController::class, 'loginForm'])->name('login');
Route::get('/singnup',[RegistrationController::class, 'singnupForm'])->name('singnup');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
