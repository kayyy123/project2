@extends('layouts.master')

@section('content')
<h2>CREATE LAPTOP</h2>

<form action="/dashboard/barang/store" method="POST">
    @csrf
    <input type="text" name="kode_barang" placeholder="Masukan Kode Barang"><br>
    <input type="text" name="nama_barang" placeholder="Masukan Nama Barang"><br>
    <input type="text" name="quantity" placeholder="Masukan Quantity"><br>
    <input type="text" name="harga" placeholder="Masukan harga"><br>
    <input type="text" name="asal_barang" placeholder="Masukan asal barang"><br>
    <input type="text" name="waktu" placeholder="Masukan waktu"><br>
    <!-- <input type="submit" name="submit" value="save"> -->
    <button type="submit" name="submit">Save</button>
</form>

@endsection