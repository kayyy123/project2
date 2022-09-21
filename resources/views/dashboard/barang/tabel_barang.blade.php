@extends('layouts.master')

@section('content')

<div class="container">
    <h2>TABEL BARANG</h2>

    <table border="1">
        <tr>
            <th>Nama Barang</th>
            <th>Katagori</th>
            <th>Quantity</th>
            <th>Asal Barang</th>
            <th>Waktu</th>
            <th>AKSI</th>
        </tr>
        @foreach($barang as $b)
        <tr>
            <td>{{$b->nama_barang}}</td>
            <td>{{$b->katagori}}</td>
            <td>{{$b->quantity}}</td>
            <td>{{$b->asal_barang}}</td>
            <td>{{$b->waktu}}</td>
            <td><a class="back" href="/dashboard/barang/{{$b->id_barang}}/edit">EDIT</a></td>
        </tr>
        @endforeach
        <div class="button">
            <a href="/dashboard/barang/create_laptop">add data</a>
        </div>
    </table>
</div>

@endsection