<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Dashboard\DashboardController;

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
    Route::get('/contact', 'contact');
});


// Authenticate Controller only
Route::controller(AuthController::class)->group(function () {
    Route::middleware('guest')->group(function () {
        Route::get('/login', 'index')->name('login');
        Route::get('/register', 'register')->name('register');
    });
    Route::post('/login', 'authenticate')->name('login.authenticate');
    Route::post('/register', 'store')->name('register.store');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(CategoryController::class)->group(function () {
    Route::prefix('categories')->group(function () {
        Route::get('/{category}', 'show')->name('categories.show');
    });
});

// Cart Only
Route::controller(CartController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::get('/cart', 'index')->name('cart.index');
        Route::post('/cart', 'store')->name('cart.store');
        Route::delete('/cart/{cart}', 'destroy')->name('cart.destroy');
    });
});


// Product only

Route::controller(ProductController::class)->group(function () {
    Route::prefix('product')->group(function () {
        Route::middleware('auth')->group(function () {
            Route::get('/{product}', 'show')->name('product.show');
        });
        Route::get('/', 'index')->name('product.index');
    });
});

Route::controller(InvoiceController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::post('/invoice', 'store')->name('invoice.store');
    });
});

// Article Only
Route::controller(ArticleController::class)->group(function () {
    Route::prefix('articles')->group(function () {
        Route::get('/', 'index')->name('articles.index');
        Route::get('/{article}', 'show')->name('articles.show');
    });
});

//Tags Only

Route::controller(TagController::class)->group(function () {
    Route::prefix('tags')->group(function () {
        Route::get('/{tag}', 'show')->name('tags.show');
    });
});

Route::controller(ProfileController::class)->group(function () {
    Route::middleware('auth')->group(function () {
        Route::prefix('/profile')->group(function () {
            Route::get('{user}', 'show')->name('profile.show');
        });
    });
});

// Authenticate only
Route::middleware('auth', 'role')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard.index');
    });
});
