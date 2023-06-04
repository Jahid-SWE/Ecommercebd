<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController ::class, 'index'])->name('home');
Route::get('/create', [HomeController ::class, 'create'])->name('create');
Route::get('/contact', [HomeController ::class, 'contact'])->name('contact');
Route::get('/about', [HomeController ::class, 'about'])->name('about');
Route::get('/product', [HomeController ::class, 'Product'])->name('product');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.home');
    })->name('dashboard');
});
Route::get('/redirect', [HomeController ::class, 'redirect'])->name('redirect');