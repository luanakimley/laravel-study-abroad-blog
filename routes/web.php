<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\TagsController;

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

Route::get('/', [PagesController::class, 'index'])->name('index');

Route::resource('/blog', PostsController::class);

Route::resource('/tags', TagsController::class);

Route::post('/blog/bookmark/{slug}/{user_id}', [App\Http\Controllers\PostsController::class, 'bookmark']);

Route::post('/bookmark/{slug}/{user_id}', [App\Http\Controllers\PostsController::class, 'unbookmark']);

Route::get('/bookmarks', [App\Http\Controllers\PostsController::class, 'bookmarks']);

Auth::routes();

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Google login
Route::get('login/google', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGoogleCallback']);
Route::get('social-share', [SocialShareController::class, 'index']);


// Github login
Route::get('login/github', [App\Http\Controllers\Auth\LoginController::class, 'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleGithubCallback']);

// Twitter login
Route::get('login/twitter', [App\Http\Controllers\Auth\LoginController::class, 'redirectToTwitter'])->name('login.twitter');
Route::get('login/twitter/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleTwitterCallback']);

// Linkedin login
Route::get('login/linkedin', [App\Http\Controllers\Auth\LoginController::class, 'redirectToLinkedin'])->name('login.linkedin');
Route::get('login/linkedin/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleLinkedinCallback']);


Route::get('/contact', [App\Http\Controllers\PagesController::class, 'showContactForm'])->name('contact.show');
Route::post('/contact', [App\Http\Controllers\PagesController::class, 'submitContactForm'])->name('contact.submit');

  
