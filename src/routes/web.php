<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookAuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookGenreController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
Route::get('books', [BookController::class, 'index'])->name('books.index');
Route::get('genres', [GenreController::class, 'index'])->name('genres.index');
Route::get('authors', [AuthorController::class, 'index'])->name('authors.index');

Route::get('book/{id}', [BookController::class, 'show'])->name('book.show');
Route::get('books/genre/{id}', [BookGenreController::class, 'index'])->name('book.genre');
Route::get('books/author/{id}', [BookAuthorController::class, 'index'])->name('book.author');

//Route::get('genres', [GenreController::class, 'show'])->name('genres.show');
//Route::get('authors', [AuthorController::class, 'show'])->name('authors.show');

Route::group([
    'middleware' => 'admin',
    'prefix' => 'admin',
    'as' => 'admin',
], function () {

    Route::group([
        'prefix' => 'book',
        'as' => '.book',
    ], function () {
        Route::get('create', [BookController::class, 'create'])->name('.create');
        Route::get('edit', [BookController::class, 'edit'])->name('.edit');
        Route::post('store', [BookController::class, 'store'])->name('.store');
    });

    Route::group([
        'prefix' => 'author',
        'as' => '.author',
    ], function () {
        Route::get('create', [AuthorController::class, 'create'])->name('.create');
        Route::get('edit', [AuthorController::class, 'edit'])->name('.edit');
        Route::post('store', [AuthorController::class, 'store'])->name('.store');
    });

    Route::group([
        'prefix' => 'genre',
        'as' => '.genre',
    ], function () {
        Route::get('create', [GenreController::class, 'create'])->name('.create');
        Route::get('edit', [GenreController::class, 'edit'])->name('.edit');
        Route::post('store', [GenreController::class, 'store'])->name('.store');
    });
});

