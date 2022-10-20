<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\EkskulController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\UserController;
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

Route::get('/', function() {
    return view('home');
})->middleware('auth');

Route::get('error', [UserController::class, 'error']);

Route::get('/register', [UserController::class, 'register']);
Route::post('/register', [UserController::class, 'doRegister']);

Route::get('login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('doLogin', [UserController::class, 'doLogin'])->middleware('guest');


Route::get('logout', [UserController::class, 'logout'])->middleware('auth');


Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->middleware('auth');
Route::get('/mahasiswa/{id}',[MahasiswaController::class, 'show'])->middleware('auth');
Route::get('/mahasiswa-add',[MahasiswaController::class, 'create']);
Route::post('/mahasiswa',[MahasiswaController::class, 'store'])->middleware(['auth', 'only-admin']);
Route::get('/mahasiswa-edit/{id}',[MahasiswaController::class, 'edit'])->middleware(['auth', 'only-admin']);
Route::put('/mahasiswa/{id}',[MahasiswaController::class, 'update'])->middleware(['auth', 'only-admin']);
Route::get('/mahasiswa-delete/{id}',[MahasiswaController::class, 'delete'])->middleware(['auth', 'only-admin']);
Route::delete('/mahasiswa-destroy/{id}',[MahasiswaController::class, 'destroy'])->middleware(['auth', 'only-admin']);
Route::get('/mahasiswa-deleted',[MahasiswaController::class, 'deleted'])->middleware(['auth', 'only-admin']);
Route::get('/mahasiswa/{id}/restore',[MahasiswaController::class, 'restore'])->middleware(['auth', 'only-admin']);


Route::get('/fakultas',[FakultasController::class, 'index'])->middleware('auth');
Route::get('/fakultas-detail/{id}',[FakultasController::class, 'show'])->middleware('auth');


Route::get('/ekskul',[EkskulController::class, 'index'])->middleware('auth');
Route::get('/ekskul-detail/{id}',[EkskulController::class, 'show'])->middleware('auth');


Route::get('/dosen',[DosenController::class, 'index'])->middleware('auth');
Route::get('/dosen-detail/{id}',[DosenController::class, 'show'])->middleware('auth');
