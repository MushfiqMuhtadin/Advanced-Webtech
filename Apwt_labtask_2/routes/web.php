<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\studentcontroller;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signup', [studentcontroller::class, 'signupget'])->name('signup');
Route::post('/signup', [studentcontroller::class, 'signuppost'])->name('signup');

Route::get('/login', [studentcontroller::class, 'loginget'])->name('login');
Route::post('/login', [studentcontroller::class, 'loginpost'])->name(';ogin');