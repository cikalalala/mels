<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServicesController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('customer', function () {
    return view('customer');
})->Middleware('auth', 'is_admin:admin');

Auth::routes();
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog-single', [MenuController::class, 'index'])->name('blog-single');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/service', [ServicesController::class, 'index'])->name('service');