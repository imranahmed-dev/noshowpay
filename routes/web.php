<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Frontend\FrontendController;
use \App\Http\Controllers\Admin\AdminController;

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

//frontend route
Route::get('/', [FrontendController::class, 'index'])->name('frontend');

Route::get('/user/login', [FrontendController::class, 'userLogin'])->name('user.login');

Route::get('/user/register', [FrontendController::class, 'userRegister'])->name('user.register');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    
    return view('dashboard.home');
    
})->name('dashboard');

//admin route
Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin');

