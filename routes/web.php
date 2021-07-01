<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperUserController;

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
    return view('baselayout');
})->name('home');

Route::resource('student', StudentController::class);

Route::get('/admin', [AdminController::class, 'index'])->name('admin');
Route::get('/admin/register/student', function (){
    return view('admin.register_student');
})->name('register_student');

Route::get('/accounts', [AccountantController::class, 'index'])->name('accounts');

Route::get('/superUser', [SuperUserController::class, 'index'])->name('superUser');
