@extends('layouts.master')

@section('content')

<form action="/dashboard/barang/store" method="POST">
    @csrf
    <h2>CREATE LAPTOP</h2>
    <div class="input-box">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" placeholder="Masukan Nama Barang">
    </div>
    <div class="input-box">
        <label>KATAGORI</label>
        <select name="katagori">
            <option value="">Pilih Jenis Katagori</option>
            <option value="laptop">Laptop</option>
            <option value="led_tv">LED TV</option>
            <option value="infocus">Infocus</option>
            <option value="printer">Printer</option>
        </select>
    </div>
    <div class="input-box">
        <label>Quantity</label>
        <input type="text" name="quantity" placeholder="Masukan Quantity">
    </div>
    <div class="input-box">
        <label>Asal Barang</label>
        <input type="text" name="asal_barang" placeholder="Masukan asal barang">
    </div>
    <div class="input-box">
        <label>Waktu</label>
        <input type="text" name="waktu" placeholder="Masukan waktu">
    </div>
    <!-- <input type="submit" name="submit" value="save"> -->
    <div class="input-button">
        <button type="submit" name="submit">Save</button>
    </div>

</form>

@endsection