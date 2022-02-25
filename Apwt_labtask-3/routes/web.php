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

Route::get('/database', [studentcontroller::class, 'databaseget'])->name('database');

Route::get('/signup', [studentcontroller::class, 'signupget'])->name('signup');
Route::post('/signup', [studentcontroller::class, 'signuppost'])->name('signup');

Route::get('/crud', [studentcontroller::class, 'crudget'])->name('crud');

Route::get('/edit/{id}', [studentcontroller::class, 'editget'])->name('edit');
Route::post('/update/{id}', [studentcontroller::class, 'updatepost'])->name('update');
Route::get('/delete/{id}', [studentcontroller::class, 'deleteget'])->name('delete');