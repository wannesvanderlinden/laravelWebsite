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
use App\Http\Controllers\SpelController;

use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;





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

//main reactie + news
Route::get('/', [userController::class,'get' ])->name('index');
Route::post('/', [ReactionController::class,'store'])->name('reaction.store');

//login
Route::get('/login',[LoginController::class,'get'] )->middleware('guest')->name('login.get');
Route::post('/login',[LoginController::class,'authenticate'] )->middleware('guest')->name('login.auth');

//forgot password
Route::get('/forgot-password', [LoginController::class,'getPasswordReset'])->middleware('guest')->name('password.request');

Route::post('/forgot-password',[LoginController::class,'sendPasswordReset'])->middleware('guest')->name('password.email');

Route::get('/reset-password/{token}', [LoginController::class,'getResetWithToken'])->middleware('guest')->name('password.reset');

Route::post('/reset-password/{token}', [LoginController::class,'resetPasswordSave'])->middleware('guest')->name('password.update');


//regristation
Route::get('/regristation', [LoginController::class,'getRegristration'] )->middleware('guest')->name('regristation');

//regristration save
Route::post('/regristation',[userController::class,'save'])->middleware('guest')->name('save.regristation');

//contact formulier
Route::get('/contactUs', [ContactController::class,'getContactField'])->name('contactUs');

Route::post('/contactUs',[ContactController::class,'save'])->name('save.contact');


//FAQ for user and guest
Route::get('/FAQ',[CategorieController::class,'show'])->name('show.categories');
Route::get('/FAQ/{categorie}/show',[QuestionsController::class,'showForUser'])->name('show.questionsOfCategories');

//News edit admin
Route::get('/news/editNews', [NewsController::class,'getEdit'] )->middleware('admin')->name('NewsDashboard');
Route::get('/news/editNews', [NewsController::class,'show'])->middleware('admin')->name('show.news');

//profile for user 
Route::get('/profile',[userController::class,'profile'] )->middleware('auth')->name('profile');

//edit profile
Route::get('/profile/edit',[userController::class,'getProfileEdit'] )->middleware('auth')->name('profileEdit');

Route::post('/profile/edit', [userController::class,'saveChanges'])->middleware('auth')->name('save.profileEdit');

//Log uit
Route::get('/logout',[LoginController::class,'logout' ])->middleware('auth')->name('loguit');

//admin news creator
Route::get('/news/newsCreator',[NewsController::class,'getNewsCreator'] )->middleware('admin')->name('newsCreator');

Route::post('/news/newsCreator', [NewsController::class,'save'])->middleware('admin')->name('save.newsCreator');

//admin faq edit dashboard
Route::get('/FAQ/edit',[CategorieController::class,'get' ])->name('getEditPage');

//admin edit categories
Route::get('/FAQ/edit',[CategorieController::class,'getEdit' ])->middleware('admin')->name('categorie.getEdit');
Route::get('/FAQ/categorie/{categorie}/edit',[CategorieController::class,'edit' ])->middleware('admin')->name('categorie.edit');
Route::put('/FAQ/categorie/{categorie}',[CategorieController::class,'update' ])->middleware('admin')->name('categorie.update');

//admin create categories
Route::get('/FAQ/categorie/create',[CategorieController::class,'getCreator' ]);
Route::post('/FAQ/categorie/create',[CategorieController::class,'store' ])->middleware('admin')->name('categorie.create');

//admin delete categories + questions of that categorie
Route::get('/FAQ/categorie/{categorie}/delete',[CategorieController::class,'destroy' ])->middleware('admin')->name('categorie.delete');


//admin edit questions of post and update them
Route::get('/FAQ/categorie/{categorie}/edit/questions',[QuestionsController::class,'show' ])->middleware('admin')->name('questions.editShow');


Route::get('/FAQ/questions/{questions}/edit',[QuestionsController::class,'edit'])->middleware('admin')->name('questions.edit');
Route::get('/FAQ/questions/{questions}/delete',[QuestionsController::class,'destroy'])->middleware('admin')->name('questions.delete');
Route::put('/FAQ/question/{questions}/save',[QuestionsController::class,'update' ])->middleware('admin')->name('questions.update');

Route::get('/FAQ/question/add',[QuestionsController::class,'create'])->middleware('admin')->name('questions.create');
Route::put('/FAQ/question/add',[QuestionsController::class,'store'])->middleware('admin')->name('questions.store');

Route::get('/user/promote',[userController::class,'show'])->middleware('admin')->name('admin.show');
Route::get('/user/promote/{user}',[userController::class,'promote'])->middleware('admin')->name('admin.promote');


Route::get('/user/demote/{user}',[userController::class,'demote'])->middleware('admin')->name('admin.demote');
//news edit
Route::get('/news/{news}/edit',[NewsController::class,'edit'])->middleware('admin')->name('newsItem.edit');
Route::post('/news/{news}/edit',[NewsController::class,'update'])->middleware('admin')->name('newsItem.update');

Route::get('/news/{news}/delete',[NewsController::class,'delete'])->middleware('admin')->name('newsItem.delete');

//admin inbox
Route::get('/admin/inbox',[ContactController::class,'show'])->middleware('admin')->name('admin.showInbox');
Route::get('/admin/{contact}/reply',[ContactController::class,'get'])->middleware('admin')->name('admin.emailShow');
Route::post('/admin/{contact}/reply',[MailController::class,'sendEmail'])->middleware('admin')->name('admin.emailSave');

//admin inbox
Route::get('/profile/user/{user}',[userController::class,'showProfile'])->middleware('auth')->name('profile.show');

//about me
Route::get('/aboutMe',[userController::class,'getAboutMe'])->name('aboutMe.get');

//spellen forum
Route::get('/spellenForum',[SpelController::class,'index'])->middleware('auth')->name('spellenforum.show');

Route::get('/spellenForum/create',[SpelController::class,'creator'])->middleware('auth')->name('spellenforum.creator');

Route::post('/spellenForum/create',[SpelController::class,'create'])->middleware('auth')->name('spellenforum.store');

