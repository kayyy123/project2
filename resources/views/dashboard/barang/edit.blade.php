@extends('layouts.master')

@section('content')

<div class="wrapper">
    <form action="/dashboard/barang/{{$barang->id}}" method="POST">
        <h2>EDIT LAPTOP</h2>
        @method('put')
        @csrf
        <input type="text" name="kode_barang" placeholder="Masukan Kode Barang" value="{{$barang->kode_barang}}"><br>
        <input type="text" name="nama_barang" placeholder="Masukan Nama Barang" value="{{$barang->nama_barang}}"><br>
        <input type="text" name="quantity" placeholder="Masukan Quantity" value="{{$barang->quantity}}"><br>
        <input type="text" name="harga" placeholder="Masukan harga" value="{{$barang->harga}}"><br>
        <input type="text" name="asal_barang" placeholder="Masukan asal barang" value="{{$barang->asal_barang}}"><br>
        <input type="text" name="waktu" placeholder="Masukan waktu" value="{{$barang->waktu}}"><br>
        <!-- <input type="submit" name="submit" value="update"> -->
        <button type="submit" name="submit">Update</button>
    </form>
</div>


@endsection