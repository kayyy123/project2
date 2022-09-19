<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function tabel_barang()
    {
        $barang = Barang::all();
        return view('dashboard.barang.tabel_barang',compact('barang'));
    }

    public function create_laptop()
    {
        return view('dashboard.barang.create_laptop');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));      
        Barang::create($request->except(['_token','submit']));
        return redirect('/dashboard/barang/tabel_barang');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        // dd($barang);
        return view('dashboard.barang.edit',compact('barang'));
    }

    public function update($id, Request $request)
    {
        $barang = Barang::find($id);
        // dd($request);
        $barang->update($request->except(['_token','submit']));
        return redirect('/dashboard/barang/tabel_barang');
    }
}
