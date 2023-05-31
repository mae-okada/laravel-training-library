<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
use App\Http\Controllers\Auth\LoginController;

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

use App\Http\Controllers\Auth\RegisterController;

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [RegisterController::class, 'create'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Auth::routes();
// Route::get('/detail',[BookController::class,'detail']);
// Route::get('/detail/{id?}',[BookController::class,'detail']);
// Route::get('/detail/{id}', [BookController::class, 'detail'])->name('book.detail');
// Route::get('/detail/{id}','BookController@detail');
// Route::post('/index', 'BookController@index');

// route buat action form
// Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::get('/',[BookController::class,'index'])->name('books.index');
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
        Route::get('/create', [BookController::class, 'create'])->name('books.create');
        Route::post('/books', [BookController::class, 'store'])->name('books.store');
        Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
        Route::post('/update/{id}', [BookController::class, 'update'])->name('books.update');
        Route::delete('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
});

// Route::group(['middleware' => 'admin'], function () {
//     // 管理者専用のルート
//         Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
//         Route::post('/books', [BookController::class, 'store'])->name('books.store');
//         Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
//         Route::post('/update/{id}', [BookController::class, 'update'])->name('books.update');
//         Route::delete('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');
// });

// Route::get('/books/create', [BookController::class, 'create'])->name("books.create");
// Route::post('/books', [BookController::class, 'store'])->name('books.store');
// Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');
// Route::post('/update/{id}', [BookController::class, 'update'])->name('books.update');
// Route::delete('/books/{id}/destroy', [BookController::class, 'destroy'])->name('books.destroy');

