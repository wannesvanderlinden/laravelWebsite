<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;



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
Route::get('/', [NewsController::class,'get' ])->name('index');

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

Route::post('/contactUs',[ContactController::class,'save'])->middleware('auth')->name('save.contact');
Route::get('/FAQ',function () {
    return view('faq');
})->name('FAQ');

Route::get('/news/editNews',function () {
    return view('editNews');
} )->name('NewsDashboard');
Route::get('/news/editNews', [NewsController::class,'get']);


Route::get('/profile',function () {
   
    return view('profile');
} )->middleware('auth')->name('profile');

Route::get('/profile/edit',function () {
   
    return view('profileEdit');
} )->middleware('auth')->name('profileEdit');
Route::post('/profile/edit', [userController::class,'saveChanges'])->name('save.profileEdit');

Route::get('/logout',[LoginController::class,'logout' ])->middleware('auth')->name('loguit');

Route::get('/news/newsCreator',function () {
    return view('newsCreator');
} )->middleware('auth')->name('newsCreator');

Route::post('/news/newsCreator', [NewsController::class,'save'])->name('save.newsCreator');