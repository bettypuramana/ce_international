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
//Auth::routes();
Auth::routes(['register' => false]);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
Route::get('/change-password',  [App\Http\Controllers\ChangePasswordController::class, 'showChangePasswordForm'])->name('password.change');
Route::post('/change-password',  [App\Http\Controllers\ChangePasswordController::class, 'changePassword'])->name('password.update');
});

Route::get('/', [App\Http\Controllers\User\HomeController::class, 'index'])->name('user.home');
Route::get('/careers', [App\Http\Controllers\User\HomeController::class, 'careers'])->name('user.careers');
Route::get('/contact_us', [App\Http\Controllers\User\HomeController::class, 'contact_us'])->name('user.contact_us');
Route::get('/expertise', [App\Http\Controllers\User\HomeController::class, 'expertise'])->name('user.expertise');
Route::get('/mining', [App\Http\Controllers\User\HomeController::class, 'mining'])->name('user.mining');
Route::post('/career-submit', [App\Http\Controllers\User\HomeController::class, 'store_career'])->name('career.store');



Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('home');

/**************** Career admin  *************/

Route::get('/career-list', [App\Http\Controllers\Admin\CareersController::class, 'index'])->name('career-list');
Route::get('/deletecareer/{id}', [App\Http\Controllers\Admin\CareersController::class, 'delete'])->name('deletecareer');
