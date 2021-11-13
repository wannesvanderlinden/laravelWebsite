<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;



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

//main
Route::get('/', [userController::class,'get' ])->name('index');

//login
Route::get('/login',function () {
    return view('login');
} )->name('login');

Route::post('/login',[LoginController::class,'authenticate'] )->name('login');
//regristation
Route::get('/regristation', function () {
    return view('regristation');
})->name('regristation');
//regristration save
Route::post('/regristation',[userController::class,'save'])->name('regristation');

Route::get('/contactUs', function () {
    return view('contact');
})->name('contactUs');

Route::post('/contactUs',[ContactController::class,'save'])->name('save.contact');