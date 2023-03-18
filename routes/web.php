<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Page Controller only
Route::controller(PageController::class)->group(function () {
    Route::get('/', 'index');
});


// Authenticate Controller only
Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index')->name('login');
    Route::post('/login', 'authenticate')->name('login.authenticate');
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'store')->name('register.store');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(CategoryController::class)->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/{category}', 'show')->name('categories.show');
    });
});

// Product only

Route::controller(ProductController::class)->group(function () {
    Route::prefix('product')->group(function () {
        Route::get('/', 'index')->name('product.index');
        Route::get('/{product}', 'show')->name('product.show');
    });
});

// Article Only
Route::controller(ArticleController::class)->group(function () {
    Route::prefix('articles')->group(function () {
        Route::get('/', 'index')->name('articles.index');
        Route::get('/{article}', 'show')->name('articles.show');
    });
});

// Authenticate only
Route::middleware('auth', 'role')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard.index');
    });
});
