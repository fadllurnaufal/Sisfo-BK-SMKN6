<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\ReportController;
use Faker\Provider\Base;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
    return view('/auth/login',[
        'title' => 'Login Page'
    ]);
});


/* Signup Page */
Route::get('/auth/registration', [RegistrationController::class,'index']);

/*  Profile */
Route::get('/admin/profile', [LoginController::class, 'profile']);

/* Dashboard Page */

Route::get('/admin/features/dashboard/base', [DashboardController::class, 'index' ]);

/* Daftar Siswa Page */

Route::get('/admin/features/siswa/base', [SiswaController::class, 'index']);
Route::get('/admin/features/siswa/detail', [SiswaController::class, 'detail']);

/*  Report Page */

Route::get('/admin/features/report/jurnal', [ReportController::class, 'index']);
Route::get('/admin/features/report/visit', [ReportController::class, 'visit']);

/* Evaluation Page */

Route::get('/admin/features/evaluation/individual', [EvaluationController::class, 'index']);
Route::get('/admin/features/evaluation/group', [EvaluationController::class, 'group'])->name('group');
Route::get('/admin/features/evaluation/cases', [EvaluationController::class, 'cases'])->name('cases');