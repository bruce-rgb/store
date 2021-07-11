<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home/create', [App\Http\Controllers\HomeController::class, 'create'])->name('create');//->middleware('auth');
Route::post('/home/store', [App\Http\Controllers\HomeController::class, 'store'])->name('store');
Route::delete('/home/delete/{id}', [App\Http\Controllers\HomeController::class, 'delete'])->name('delete');
Route::get('/home/edit/{id}', [App\Http\Controllers\HomeController::class, 'edit'])->name('edit');
Route::put('/home/update/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('update');
