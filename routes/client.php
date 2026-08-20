<?php

use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\CareerController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\NewsController;
use App\Http\Controllers\Client\PageController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gioi-thieu', [AboutController::class, 'index'])->name('about');
Route::get('/san-pham', [ProductController::class, 'index'])->name('products');
Route::get('/du-an', [ProjectController::class, 'index'])->name('projects');
Route::get('/tin-tuc', [NewsController::class, 'index'])->name('news');
Route::get('/tuyen-dung', [CareerController::class, 'index'])->name('careers');
Route::get('/lien-he', [ContactController::class, 'index'])->name('contact');

Route::get('/pages/{slug}', [PageController::class, 'show'])
    ->where('slug', '[A-Za-z0-9\-_]+')
    ->name('pages.show');
