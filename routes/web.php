<?php

use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluationController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\VisitController;
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

    /* Route Profile */
    Route::get('/admin/profile', [LoginController::class, 'profile']);
    
    /* Route Dashboard */
    Route::get('/admin/features/dashboard', [DashboardController::class, 'index']);

    /* Route Daftar Siswa */

    Route::name('siswa.')->group(function () {
        Route::get('/admin/features/siswa',[SiswaController::class, 'index'])->name('index');
        Route::post('create', [SiswaController::class, 'store'])->name('store.siswa');
        Route::get('/edit/{id}', [SiswaController::class, 'edit']);
        Route::patch('/edit/{id}', [SiswaController::class, 'update']);
        Route::delete('/destroy/{id}', [SiswaController::class, 'destroy']);
    });
    
    /* Route Jurnal Page */
    Route::get('/admin/features/jurnal', [JurnalController::class, 'index'])->name('index');
    Route::prefix('jurnal')->group(function () {
        Route::name('jurnal.')->group(function () {
            Route::post('create', [JurnalController::class, 'store'])->name('store.jurnal');
        });
    });

    /* Route Visit Page */
    Route::get('/admin/features/visit', [VisitController::class, 'index'])->name('visit.index');
    Route::prefix('visit')->group(function() {
        Route::name('visit.')->group(function () {
            Route::post('create', [VisitController::class, 'store'])->name('store.visit');
        });
    });

    /* Route Evaluation*/
    Route::get('/admin/features/individual', [EvaluationController::class, 'index']);
    Route::get('/admin/features/group', [EvaluationController::class, 'group'])->name('group');
    Route::get('/admin/features/cases', [EvaluationController::class, 'cases'])->name('cases');

});