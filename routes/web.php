<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Admin Login Route without admin group
Route::get('admin/login', [AdminController::class, 'login']);  

// Admin Dashboard Route without admin group
Route::get('admin/dashboard', [AdminController::class, 'dashboard']);   // or 
// Route::get('admin/dashboard', 'App\Http\Controllers\Admin\AdminController@dashboard');


// or

Route::prefix('/admin')->namespace('App\Http\Controllers\Admin')->group(function(){
    // Admin Dashboard Login
    // Route::get('login', [AdminController::class, 'login']);    // or
    Route::get('login', 'AdminController@login');

    // Admin Dashboard Route
    Route::get('dashboard', [AdminController::class, 'dashboard']);   // or 

});