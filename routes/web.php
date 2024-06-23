<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\VisitsController;
use App\Http\Controllers\SurgeryController;
use App\Http\Controllers\PharmacyController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\SurgerycoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'department'], function () {
    Route::get('/create', [DepartmentController::class, 'create'])->name('department.create');
    Route::post('/store', [DepartmentController::class, 'store'])->name('department.store');
    Route::get('/destroy{id}', [DepartmentController::class, 'destroy'])->name('department.destroy');
    Route::get('/index', [DepartmentController::class, 'index'])->name('department.index');
    Route::post('/update{id}', [DepartmentController::class, 'update'])->name('department.update');
    Route::get('/edit/{id}', [DepartmentController::class, 'edit'])->name('department.edit');
});

Route::group(['prefix' => 'visits'], function () {
    Route::get('/create', [VisitsController::class, 'create'])->name('visits.create');
    Route::post('/store', [VisitsController::class, 'store'])->name('visits.store');
    Route::get('/destroy/{id}', [VisitsController::class, 'destroy'])->name('visits.destroy');
    Route::get('/index', [VisitsController::class, 'index'])->name('visits.index');
    Route::post('/update{id}', [VisitsController::class, 'update'])->name('visits.update');
    Route::get('/edit/{id}', [VisitsController::class, 'edit'])->name('visits.edit');
});

Route::group(['prefix' => 'surgery'], function () {
    Route::get('/create', [SurgeryController::class, 'create'])->name('surgery.create');
    Route::post('/store', [SurgeryController::class, 'store'])->name('surgery.store');
    Route::get('/destroy/{id}', [SurgeryController::class, 'destroy'])->name('surgery.destroy');
    Route::get('/index', [SurgeryController::class, 'index'])->name('surgery.index');
    Route::post('/update{id}', [SurgeryController::class, 'update'])->name('surgery.update');
    Route::get('/edit/{id}', [SurgeryController::class, 'edit'])->name('surgery.edit');
});

Route::group(['prefix' => 'pharmacy'], function () {
    Route::get('/create', [PharmacyController::class, 'create'])->name('pharmacy.create');
    Route::post('/store', [PharmacyController::class, 'store'])->name('pharmacy.store');
    Route::get('/destroy/{id}', [PharmacyController::class, 'destroy'])->name('pharmacy.destroy');
    Route::get('/index', [PharmacyController::class, 'index'])->name('pharmacy.index');
    Route::post('/update{id}', [PharmacyController::class, 'update'])->name('pharmacy.update');
    Route::get('/edit/{id}', [PharmacyController::class, 'edit'])->name('pharmacy.edit');
});

Route::group(['prefix' => 'users'], function () {
    Route::get('/create', [UsersController::class, 'create'])->name('users.create');
    Route::post('/store', [UsersController::class, 'store'])->name('users.store');
    Route::get('/destroy/{id}', [UsersController::class, 'destroy'])->name('users.destroy');
    Route::get('/index', [UsersController::class, 'index'])->name('users.index');
    Route::post('/update{id}', [UsersController::class, 'update'])->name('users.update');
    Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
});

Route::group(['prefix' => 'surgeryco'], function () {
    Route::get('/create', [SurgerycoController::class, 'create'])->name('surgeryco.create');
    Route::post('/store', [SurgerycoController::class, 'store'])->name('surgeryco.store');
    Route::get('/destroy/{id}', [SurgerycoController::class, 'destroy'])->name('surgeryco.destroy');
    Route::get('/index', [SurgerycoController::class, 'index'])->name('surgeryco.index');
    Route::post('/update{id}', [SurgerycoController::class, 'update'])->name('surgeryco.update');
    Route::get('/edit/{id}', [SurgerycoController::class, 'edit'])->name('surgeryco.edit');
});