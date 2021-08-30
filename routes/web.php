<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AccountantController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Models\Student;
use App\Http\Controllers\SuperUserController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\ContactController;

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

Route::get('/profile', function () {
    return view('students.profile');
})->name('profile');

Route::get('/', function () {
    return view('baselayout');
})->name('home')->middleware('user_role');

//Route::get('/dashboard', 'App\Http\Controllers\DashboardController@dashboard')->name('dashboard');
Route::group(['middleware'=>['auth']], function(){
    Route::resource('student', StudentController::class);
    Route::resource('accountant', AccountantController::class);
    Route::resource('user', UserController::class);
    Route::resource('admin', AdminController::class);
    Route::resource('course', CourseController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('registration', RegistrationController::class);
    Route::resource('announcement', AnnouncementController::class);
    Route::get('/student/{student}/pay', function(Student $student){
        return view('payment.create', compact('student'));
    })->name('pay');
    Route::get('/payment/{student}/payments', [PaymentController::class, 'studentPayment'])->name('payments');
    Route::post('/confirmPassword/{user}', [UserController::class, 'confirmPassword'])->name('confirmPassword');
    Route::post('/updatePassword/{user}', [UserController::class, 'updatePassword'])->name('updatePassword');
});


Route::get('/admin/register/student', function (){
    return view('admin.register_student');
})->name('register_student');

Route::get('/superUser', [SuperUserController::class, 'index'])->name('superUser');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home1');

Route::get('/loggedout', function(){
    return view('welcome');
})->name('loggedout');

Route::get('/contact-us', [ContactController::class,'contact']);

Route::post('/send-message',[ContactController::class,'sendEmail'])->name('contact.send');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');