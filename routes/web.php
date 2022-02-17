<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ViewController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ViewController::class, 'index'])->name('home');
Route::get('/bitm', [ViewController::class, 'bitm'])->name('bitm');
Route::get('/about', [ViewController::class, 'about'])->name('about');
Route::get('/contact', [ViewController::class, 'contact'])->name('contact');
Route::post('/full-name', [UserController::class, 'fullName'])->name('full-name');
