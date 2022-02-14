<?php

use App\Http\Controllers\FrontController;
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

Route::get('/', [FrontController::class, "home"])->name('home');

Route::get('/article', [FrontController::class, 'article'])->middleware(['auth'])->name('article');

Route::get('/admin/dashboard', [FrontController::class, 'admin'])->middleware(['auth', 'isAdmin'])->name('dashboard');

require __DIR__.'/auth.php';
