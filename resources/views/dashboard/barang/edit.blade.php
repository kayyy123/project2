@extends('layouts.master')

@section('content')

<div class="wrapper">
    <form action="/dashboard/barang/{{$barang->id_barang}}" method="POST">
        <h2>EDIT LAPTOP</h2>
        @method('put')
        @csrf
        
        <input type="text" name="nama_barang" placeholder="Masukan Nama Barang" value="{{$barang->nama_barang}}"><br>
        <select name="katagori">
            <option value=""></option>
            <option value="laptop" @if($barang->katagori == "laptop") selected @endif>Laptop</option>
            <option value="led_tv" @if($barang->katagori == "led_tv") selected @endif>LED TV</option>
            <option value="infocus" @if($barang->katagori == "infocus") selected @endif>Infocus</option>
            <option value="printer" @if($barang->katagori == "printer") selected @endif>Printer</option>
        </select>
        <input type="text" name="quantity" placeholder="Masukan Quantity" value="{{$barang->quantity}}"><br>
        <input type="text" name="asal_barang" placeholder="Masukan asal barang" value="{{$barang->asal_barang}}"><br>
        <input type="text" name="waktu" placeholder="Masukan waktu" value="{{$barang->waktu}}"><br>
        <!-- <input type="submit" name="submit" value="update"> -->
        <div class="input-button">
            <button type="submit" name="submit">Update</button>
        </div>
        <div class="input-button">
            <button type="reset" name="submit">Back</button>
        </div>
    </form>
</div>


@endsection