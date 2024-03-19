<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthorDashboardController;
use App\Http\Controllers\WritingDashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/authors', AuthorController::class);
Route::get('/authors/{author}/writing/{id}', [AuthorController::class, 'showWriting'])->name('authors.writing');

Route::prefix('dashboard')->middleware(['auth'])->name('dashboard.')->group(function () {
    Route::resource('authors', AuthorDashboardController::class);
    Route::resource('writings', WritingDashboardController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
