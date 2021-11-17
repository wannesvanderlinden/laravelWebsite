<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\QuestionsController;



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
} )->middleware('guest')->name('login');

Route::post('/login',[LoginController::class,'authenticate'] )->name('login');

//regristation
Route::get('/regristation', function () {
    return view('regristation');
})->name('regristation');

//regristration save
Route::post('/regristation',[userController::class,'save'])->name('regristation');

//contact formulier
Route::get('/contactUs', function () {
    return view('contact');
})->name('contactUs');

Route::post('/contactUs',[ContactController::class,'save'])->middleware('auth')->name('save.contact');


//FAQ for user and guest
Route::get('/FAQ',function () {
    return view('faq');
})->name('FAQ');


//News edit admin
Route::get('/news/editNews',function () {
    return view('editNews');
} )->name('NewsDashboard');
Route::get('/news/editNews', [NewsController::class,'get']);

//profile for user 
Route::get('/profile',function () {
   
    return view('profile');
} )->middleware('auth')->name('profile');

//edit profile
Route::get('/profile/edit',function () {
    return view('profileEdit');
} )->middleware('auth')->name('profileEdit');

Route::post('/profile/edit', [userController::class,'saveChanges'])->name('save.profileEdit');

//Log uit
Route::get('/logout',[LoginController::class,'logout' ])->middleware('auth')->name('loguit');

//admin news creator
Route::get('/news/newsCreator',function () {
    return view('newsCreator');
} )->middleware('auth')->name('newsCreator');

Route::post('/news/newsCreator', [NewsController::class,'save'])->name('save.newsCreator');

//admin faq edit dashboard
Route::get('/FAQ/edit',function () {
    return view('faqEdit');
});

//admin edit categories
Route::get('/FAQ/edit',[CategorieController::class,'get' ]);
Route::get('/FAQ/categorie/{categorie}/edit',[CategorieController::class,'edit' ])->name('categorie.edit');
Route::put('/FAQ/categorie/{categorie}',[CategorieController::class,'update' ]);

//admin create categories
Route::get('/FAQ/categorie/create',function () {
    return view('categorieCreate');
});
Route::post('/FAQ/categorie/create',[CategorieController::class,'store' ]);

//admin delete categories + questions of that categorie
Route::get('/FAQ/categorie/{categorie}/delete',[CategorieController::class,'destroy' ]);


//admin edit questions of post and update them
Route::get('/FAQ/categorie/{categorie}/edit/questions',[QuestionsController::class,'show' ])->name('questions.editShow');


Route::get('/FAQ/questions/{questions}/edit',[QuestionsController::class,'edit'])->name('questions.edit');
Route::get('/FAQ/questions/{questions}/delete',[QuestionsController::class,'destroy']);
Route::put('/FAQ/question/{questions}/save',[QuestionsController::class,'update' ]);

Route::get('/FAQ/question/add',[QuestionsController::class,'create']);
Route::put('/FAQ/question/add',[QuestionsController::class,'store']);

Route::get('/user/promote',[userController::class,'show']);
Route::get('/user/promote/{user}',[userController::class,'promote']);


Route::get('/user/demote/{user}',[userController::class,'demote']);

