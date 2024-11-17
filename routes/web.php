<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\StudentMiddleware;
use App\Http\Controllers\UsersLogin;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\admin\StudentController as AdminStudent;

Route::get('/',[WebController::class, 'index'])->name('website.welcome');

Route::group(['prefix'=>'student'], function(){
    Route::get('signup',[AuthController::class, 'signup'])->name('student.signup');
    Route::post('register',[AuthController::class, 'register'])->name('register');

    Route::get('email-verification',[AuthController::class, 'emailVerification'])->name('student.email-verification');
    Route::post('email-verification',[AuthController::class, 'emailVerificationSubmit'])->name('student.email-verification-submit');
    Route::post('resend-email-verification-submit',[AuthController::class, 'resendemailVerificationSubmit'])->name('student.resend-email-verification-submit');

    Route::get('forget-password',[AuthController::class, 'forgetPassword'])->name('student.forget-password');
    Route::post('forget-password-submit',[AuthController::class, 'forgetPasswordSubmit'])->name('student.forget-password-submit');

    Route::get('reset-password',[AuthController::class, 'resetpassword'])->name('student.reset-password');
    Route::post('reset-password-submit',[AuthController::class, 'resetPasswordSubmit'])->name('student.reset-password-submit');
});

// Route::middleware(['auth', 'student'])->prefix('student')->group(function () {
//     Route::get('dashboard', [AuthController::class, 'dashboard'])->name('student.dashboard');
// });

Route::get('login',[UsersLogin::class, 'login'])->name('login');
Route::post('login-submit',[UsersLogin::class, 'loginSubmit'])->name('login-submit');

// Route::Post('logout',[UsersLogin::class, 'logout'])->name('logout');
Route::post('logout', [UsersLogin::class, 'logout'])->name('logout');


// Authenticated Routes
// Route::middleware(['auth'])->group(function () {
    // Student Dashboard
    Route::middleware(['auth:student'])->prefix('student')->group(function () {
        Route::get('dashboard', [UsersLogin::class, 'dashboard'])->name('student.dashboard');
    });

    // Admin Dashboard
    Route::middleware(['auth:admin'])->prefix('admin')->group(function () {
        Route::get('dashboard', [UsersLogin::class, 'dashboard'])->name('admin.dashboard');
        // Route::get('adminDashboard', [admminController::class, 'adminDashboard']);

        Route::get('students', [AdminStudent::class, 'index'])->name('admin.students.index');
        Route::get('students/show/{student_id}', [AdminStudent::class, 'show'])->name('admin.students.show');
        Route::post('students/update/{student_id}', [AdminStudent::class, 'update'])->name('admin.students.update');
        
    });

    // Teacher Dashboard
    Route::middleware(['auth:teacher'])->prefix('teacher')->group(function () {
        Route::get('dashboard', [UsersLogin::class, 'dashboard'])->name('teacher.dashboard');
    });
// });

