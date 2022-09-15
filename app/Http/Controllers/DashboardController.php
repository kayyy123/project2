<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function barang(Type $var = null)
    {
        return view('dashboard.barang');
    }
}
