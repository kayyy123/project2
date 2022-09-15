<?php

use App\Http\Controllers\DashboardController;
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


Route::get('/login-admin', function () {
    return view('login.admin');
});
Route::get('/login-owner', function () {
    return view('login.owner');
});
Route::get('/login-divisi', function () {
    return view('login.divisi');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});

Route::get('/dashboard/barang',[DashboardController::class,'barang']);