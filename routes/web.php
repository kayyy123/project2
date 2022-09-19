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


// Route::get('/login',[LoginController::class,'login']);

Route::controller(LoginController::class)->group(function(){
Route::get('login', 'index')->name('login');
Route::post('login/proses', 'proses');
});


Route::get('/dashboard/barang/tabel_barang',[BarangController::class,'tabel_barang']);
Route::get('/dashboard/barang/create_laptop',[BarangController::class,'create_laptop']);
Route::post('/dashboard/barang/store',[BarangController::class,'store']);
Route::get('/dashboard/barang/{id}/edit',[BarangController::class,'edit']);
Route::put('/dashboard/barang/{id}',[BarangController::class,'update']);

