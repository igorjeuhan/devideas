<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\CardsController;
use App\Http\Controllers\admin\RegisterController;

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
Route::redirect('/', '/admin/cards');

Route::get('admin/cards', [CardsController::class, 'cards'])->name('cards');
Route::get('admin/register', [RegisterController::class, 'register'])->name('register');
Route::post('admin/register', [RegisterController::class, 'save'])->name('save');
