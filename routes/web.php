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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => 'CheckType:admin'],function(){ 
    Route::get('/add',[App\Http\Controllers\CatController::class, 'add'])->name('cat.add');
    Route::post('/add',[App\Http\Controllers\CatController::class, 'store'])->name('cat.store');
    Route::get('/addadmin', [App\Http\Controllers\AdminController::class, 'index'])->name('registeradmin.index');
    Route::post('/addadmin', [App\Http\Controllers\AdminController::class, 'store'])->name('registeradmin.store');
});

Route::get('/show/{id}',[App\Http\Controllers\CatController::class, 'show'])->name('cat.show');