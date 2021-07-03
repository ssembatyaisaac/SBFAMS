<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SuperUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;

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
})->name('baselayout');

//Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard')->name('dashboard');

Route::resource('student', StudentController::class);
Route::resource('accounts', AccountantController::class);
Route::resource('admin', AdminController::class);
Route::resource('course', CourseController::class);
Route::resource('payment', PaymentController::class);

Route::get('/admin/register/student', function (){
    return view('admin.register_student');
})->name('register_student');

Route::get('/superUser', [SuperUserController::class, 'index'])->name('superUser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
