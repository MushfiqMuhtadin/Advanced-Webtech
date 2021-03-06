<?php

use App\Http\Controllers\PagesController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mushfiq', function () {
    return "<h1>hello world Mushfiq the boss</h1>" ;
});

Route::get('/goodboy',[PagesController::class, 'index'] );

Route::get('/home', [PagesController::class, 'home'])->name('home');

Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

Route::get('/product', [PagesController::class, 'product'])->name('product');

Route::get('/about', [PagesController::class, 'about'])->name('about');
Route::get('/contact', [PagesController::class, 'contact'])->name('contact');
Route::get('/team', [PagesController::class, 'team'])->name('team');
Route::post('/signup', [PagesController::class, 'signup'])->name('signup');


