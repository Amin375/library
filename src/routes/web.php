<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::group([
    'prefix' => 'admin',
], function () {

    Route::group([
        'prefix' => 'create',
    ], function () {
        Route::get('book/create', [BookController::class, 'create'])->name('create');
        Route::get('author/create', [AuthorController::class, 'create'])->name('create');
        Route::get('genre/create', [GenreController::class, 'create'])->name('create');
    });

    Route::group([
        'prefix' => 'edit',
    ], function () {
        Route::get('book/edit', [BookController::class, 'edit'])->name('edit');
        Route::get('author/edit', [AuthorController::class, 'edit'])->name('edit');
        Route::get('genre/edit', [GenreController::class, 'edit'])->name('edit');
    });

});
