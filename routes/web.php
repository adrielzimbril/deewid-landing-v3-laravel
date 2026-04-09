<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PricingController;
use Illuminate\Support\Facades\Route;

// Main Page Route
Route::get('/', [HomeController::class, 'index'])->name('home');

$blogDatabaseEnabled = filter_var(env('DEEWID_BLOG_DATABASE_ENABLED', false), FILTER_VALIDATE_BOOL);

if ($blogDatabaseEnabled) {
  Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/post/{slug}', [BlogController::class, 'post'])->name('post');
    Route::get('/tag/{slug}', [BlogController::class, 'tag'])->name('tag');
    Route::get('/author/{slug}', [BlogController::class, 'author'])->name('author');
    Route::get('/category/{slug}', [BlogController::class, 'category'])->name('category');
  });
} else {
  Route::prefix('blog')->name('blog.')->group(function () {
    Route::get('/', fn() => redirect()->route('home'))->name('index');
    Route::get('/post/{slug}', fn() => redirect()->route('home'))->name('post');
    Route::get('/tag/{slug}', fn() => redirect()->route('home'))->name('tag');
    Route::get('/author/{slug}', fn() => redirect()->route('home'))->name('author');
    Route::get('/category/{slug}', fn() => redirect()->route('home'))->name('category');
  });
}

Route::get('/pricing', [PricingController::class, 'index'])->name('pricing');
Route::view('/cta-variants', 'content.cta-variants')->name('cta.variants');
Route::get('/company', [CompanyController::class, 'index'])->name('company');
Route::view('/store-not-found', 'content.store-not-found')->name('store.not-found');
Route::view('/store-unavailable', 'content.store-unavailable')->name('store.unavailable');


Route::domain(env('DEEWID_APP_DOMAIN', 'deewid-landing-v3.adrielzimbril.com'))->name('deewid.')->group(function () {
  Route::get('/', fn() => redirect()->route('home'))->name('home');
  Route::get('login', fn() => redirect()->route('home'))->name('login');
  Route::get('register', fn() => redirect()->route('home'))->name('register');
});


