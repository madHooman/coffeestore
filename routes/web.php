<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');
Route::get('/article', [HomeController::class, 'article'])->name('article');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/product-details', [HomeController::class, 'productDetails'])->name('productDetails');
Route::get('/article-details', [HomeController::class, 'articleDetails'])->name('articleDetails');
Route::get('/signup', [HomeController::class, 'signup'])->name('signup');
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::post('/signup-submit', [RegisterController::class, 'action'])->name('signup_submit');
Route::get('/login', [HomeController::class, 'login'])->name('login');



require __DIR__.'/auth.php';
