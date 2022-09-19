<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::get('/login',[LoginController::class,'index']);


Route::get('/dashboard/barang',[DashboardController::class,'barang']);
Route::get('/dashboard/tabel_barang',[DashboardController::class,'tabel_barang']);
Route::get('/dashboard/create_laptop',[DashboardController::class,'create_laptop']);
Route::post('/dashboard/store',[DashboardController::class,'store']);
Route::get('/dashboard/{id}/edit',[DashboardController::class,'edit']);
Route::put('/dashboard/{id}',[DashboardController::class,'update']);
