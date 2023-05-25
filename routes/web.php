<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\FrontendHomeController;
use App\Http\Controllers\Frontend\FrontendMoreController;
use App\Http\Controllers\ExamController;

Route::get('/business/{type}', [HomeController::class, 'business']);

Route::get('/service/{type}', [HomeController::class, 'service']);

//employee**

Route::get('export_users', [UserController::class, 'exportData']);
Route::get('pdf_users', [UserController::class, 'createPDF']);



Route::get('admin/users', [LayoutController::class, 'users']);
Route::get('admin/tables', [LayoutController::class, 'tables']);
Route::get('admin/form', [LayoutController::class, 'form']);

Route::get('user/dashboard', [UserController::class, 'user_dashboard']);
//** */
Route::get('admin/register', [AuthController::class, 'register']);
Route::get('admin/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::post('admin/create_user', [AuthController::class, 'createUser']);
Route::post('admin/user_login', [AuthController::class, 'userLogin']);

Route::middleware(['CheckLoggedIn'])->group(function () {
    Route::get('admin/users', [UserController::class, 'allUsers']);
    //all dept,course,section,session start
    Route::resource('admin/department', DepartmentController::class);
    Route::resource('admin/section', SectionController::class);
    Route::resource('admin/course', CourseController::class);
    Route::resource('admin/session', SessionController::class);
    Route::resource('admin/teacher', TeacherController::class);


    Route::resource('admin/exam', ExamController::class);

    Route::get('admin/my_progress', [ExamController::class, 'myProgress']);


    //end
    Route::get('admin/approve/{userId}', [UserController::class, 'approve']);
    Route::middleware(['IsStudent'])->group(function () {
        Route::get('admin/my-courses', function () {
            return 'you are student';
        });
        Route::get('admin/my_marks', function () {
            return 'your marks';
        });
    });
    Route::middleware(['IsTeacher'])->group(function () {
        Route::get('admin/give_marks', function () {
            return 'you are teacher';
        });
    });
});



Route::resource('admin/section', SectionController::class);
Route::resource('admin/course', CourseController::class);
Route::resource('admin/Session', SessionController::class);
Route::resource('admin/teacher', TeacherController::class);

//frontend routes

Route::get('/', [FrontendHomeController::class, 'index']);
Route::get('/more', [FrontendMoreController::class, 'index']);
