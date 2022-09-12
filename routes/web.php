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
} )->name('login');

Route::post('/auth/login', [LoginController::class, 'authenticate']);
Route::get('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/auth/registration', [RegistrationController::class,'index']);
Route::post('/auth/registration', [RegistrationController::class, 'save']);

/* auth group */
Route::middleware(['auth'])->group(function () {

    
    //  route group dashboard
    Route::get('/admin/features/dashboard/base', [DashboardController::class, 'index']);

    /* Route Daftar Siswa */
    Route::get('/admin/features/siswa/base', [SiswaController::class, 'index']);
    Route::post('/add', [SiswaController::class, 'add'])->name('siswa.add');
    Route::post('/save', [SiswaController::class, 'store'])->name('siswa.save');
    Route::get('/edit/{id}', [SiswaController::class, 'edit']);
    Route::patch('/edit/{id}', [SiswaController::class, 'update']);
    Route::delete('/destroy/{id}', [SiswaController::class, 'destroy']);


    /* Route Profile */
    Route::get('/admin/profile', [LoginController::class, 'profile']);
    
    /* Route Report Page */
    Route::get('/admin/features/report/jurnal', [ReportController::class, 'index']);
    Route::get('/admin/features/report/visit', [ReportController::class, 'visit']);


    /* Route Evaluation*/
    Route::get('/admin/features/evaluation/individual', [EvaluationController::class, 'index']);
    Route::get('/admin/features/evaluation/group', [EvaluationController::class, 'group'])->name('group');
    Route::get('/admin/features/evaluation/cases', [EvaluationController::class, 'cases'])->name('cases');

});