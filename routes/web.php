<?php

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

Route::get('/home', function () {
    return view('HomePage');
})->middleware('auth');
