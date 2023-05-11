<?php

use App\Http\Controllers\AddcardController;
use App\Http\Controllers\Login;
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

Route::get('/', [Login::class, 'index'])->name('loginpage')->middleware('guest');

Route::post('/login', [Login::class, 'login'])->name('login')->middleware('guest');

Route::post('/logout', [Login::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/home', [AddcardController::class, 'index'])->middleware('auth')->name('homepage');
Route::get('/addcard', [AddcardController::class, 'addcard'])->middleware('auth')->name('addcardpage');
Route::post('/addcard', [AddcardController::class, 'storecard'])->middleware('auth')->name('storecard');
Route::get('/editcard/{id}', [AddcardController::class, 'editcard'])->middleware('auth')->name('editcardpage');
Route::post('/updatecard/{id}', [AddcardController::class, 'updatecard'])->middleware('auth')->name('updatecard');
Route::get('/deletecard/{id}', [AddcardController::class, 'deletecard'])->middleware('auth')->name('deletecard');
