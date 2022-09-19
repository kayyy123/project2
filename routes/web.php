<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Models\Barang;
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


Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

<<<<<<< HEAD
Route::get('/login',[LoginController::class,'index']);


Route::get('/dashboard/barang',[DashboardController::class,'barang']);
Route::get('/dashboard/tabel_barang',[DashboardController::class,'tabel_barang']);
Route::get('/dashboard/create_laptop',[DashboardController::class,'create_laptop']);
Route::post('/dashboard/store',[DashboardController::class,'store']);
Route::get('/dashboard/{id}/edit',[DashboardController::class,'edit']);
Route::put('/dashboard/{id}',[DashboardController::class,'update']);
=======
Route::get('/dashboard/barang/tabel_barang',[BarangController::class,'tabel_barang']);
Route::get('/dashboard/barang/create_laptop',[BarangController::class,'create_laptop']);
Route::post('/dashboard/barang/store',[BarangController::class,'store']);
Route::get('/dashboard/barang/{id}/edit',[BarangController::class,'edit']);
Route::put('/dashboard/barang/{id}',[BarangController::class,'update']);
>>>>>>> 25fb25dcc8a823cc7ea76993b665460ff6659823
