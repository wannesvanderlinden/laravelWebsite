<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReactionController;



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

Route::post('/', [ReactionController::class,'store']);

//login
Route::get('/login',function () {
    return view('login');
} )->middleware('guest')->name('login');

Route::post('/login',[LoginController::class,'authenticate'] )->middleware('guest')->name('login');




//regristation
Route::get('/regristation', function () {
    return view('regristation');
})->middleware('guest')->name('regristation');

//regristration save
Route::post('/regristation',[userController::class,'save'])->middleware('guest')->name('regristation');

//contact formulier
Route::get('/contactUs', function () {
    return view('contact');
})->name('contactUs');

Route::post('/contactUs',[ContactController::class,'save'])->name('save.contact');


//FAQ for user and guest
Route::get('/FAQ',[CategorieController::class,'show' ]);
Route::get('/FAQ/{categorie}/show',[QuestionsController::class,'showForUser']);

//News edit admin
Route::get('/news/editNews',function () {
    return view('editNews');
} )->name('NewsDashboard');
Route::get('/news/editNews', [NewsController::class,'show'])->middleware('admin');

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
} )->middleware('admin')->name('newsCreator');

Route::post('/news/newsCreator', [NewsController::class,'save'])->middleware('admin')->name('save.newsCreator');

//admin faq edit dashboard
Route::get('/FAQ/edit',function () {
    return view('faqEdit');
});

//admin edit categories
Route::get('/FAQ/edit',[CategorieController::class,'get' ])->middleware('admin');
Route::get('/FAQ/categorie/{categorie}/edit',[CategorieController::class,'edit' ])->middleware('admin')->name('categorie.edit');
Route::put('/FAQ/categorie/{categorie}',[CategorieController::class,'update' ])->middleware('admin');

//admin create categories
Route::get('/FAQ/categorie/create',function () {
    return view('categorieCreate');
});
Route::post('/FAQ/categorie/create',[CategorieController::class,'store' ])->middleware('admin');

//admin delete categories + questions of that categorie
Route::get('/FAQ/categorie/{categorie}/delete',[CategorieController::class,'destroy' ])->middleware('admin');


//admin edit questions of post and update them
Route::get('/FAQ/categorie/{categorie}/edit/questions',[QuestionsController::class,'show' ])->middleware('admin')->name('questions.editShow');


Route::get('/FAQ/questions/{questions}/edit',[QuestionsController::class,'edit'])->middleware('admin')->name('questions.edit');
Route::get('/FAQ/questions/{questions}/delete',[QuestionsController::class,'destroy'])->middleware('admin');
Route::put('/FAQ/question/{questions}/save',[QuestionsController::class,'update' ])->middleware('admin');

Route::get('/FAQ/question/add',[QuestionsController::class,'create'])->middleware('admin');
Route::put('/FAQ/question/add',[QuestionsController::class,'store'])->middleware('admin');

Route::get('/user/promote',[userController::class,'show'])->middleware('admin');
Route::get('/user/promote/{user}',[userController::class,'promote'])->middleware('admin');


Route::get('/user/demote/{user}',[userController::class,'demote'])->middleware('admin');
//news edit
Route::get('/news/{news}/edit',[NewsController::class,'edit'])->middleware('admin');
Route::post('/news/{news}/edit',[NewsController::class,'update'])->middleware('admin');

Route::get('/news/{news}/delete',[NewsController::class,'delete'])->middleware('admin');

//admin inbox
Route::get('/admin/inbox',[ContactController::class,'show'])->middleware('admin');
Route::get('/admin/{contact}/reply',[ContactController::class,'get'])->middleware('admin');
Route::post('/admin/{contact}/reply',[MailController::class,'sendEmail'])->middleware('admin');




