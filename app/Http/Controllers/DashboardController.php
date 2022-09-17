<?php

namespace App\Http\Controllers;

use App\Models\Dashboard;
use Closure;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function tabel_barang()
    {
        $barang = Dashboard::all();
        return view('dashboard.tabel_barang',compact('barang'));
    }

    public function create_laptop()
    {
        return view('dashboard.create_laptop');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));      
        Dashboard::create($request->except(['_token','submit']));
        return redirect('/dashboard/tabel_barang');
    }

    public function edit($id)
    {
        $barang = Dashboard::find($id);
        // dd($barang);
        return view('dashboard.edit');
    }
    
}
