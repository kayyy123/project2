@extends('layouts.master')

@section('content')

<div class="container">
    <h2>
        BARANG
    </h2>
    <div class="inputbox">
        <label>Kode Barang</label>
        <input type="text" name="kode_barang" placeholder="Masukan Kode Barang">
    </div>
    <div class="inputbox">
        <label>Nama Barang</label>
        <input type="text" name="nama_barang" placeholder="Masukan Nama Barang">
    </div>
    <div class="inputbox">
        <label>Quantity</label>
        <input type="text" name="quantity" placeholder="Masukan Quantity">
    </div>
    <div class="inputbox">
        <label>Harga</label>
        <input type="text" name="harga" placeholder="Masukan Harga">
    </div>
    <div class="inputbox">
        <label>Asal Barang</label>
        <input type="text" name="asal_barang" placeholder="Masukan Asal Barang">
    </div>
    <div class="inputbox">
        <label>Waktu</label>
        <input type="text" name="waktu" placeholder="Masukan Tanggal Masuk">
    </div>
    <button type="submit">
        <label>SIMPAN</label>
    </button>
    <button type="submit">
        <label>HAPUS</label>
    </button>
</div>

