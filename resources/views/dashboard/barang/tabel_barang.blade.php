<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/assets\css/dashboard.css">
</head>
<body>
    
    <!-- <div class="fContainer">
        <div class="sidebar">
            <header>My app</header>
        </div> 
            <nav class="wrapper">
            <ul>
         <h2>PT INVENTARIS GELORA GEMILANG</h2>
        </ul>
            </nav>
        </div> -->
    <h2>TABEL BARANG</h2>
    
    <table border="2">
        <tr>
            <th>Kode Barang</th>
            <th>Nama Barang</th>
            <th>Quantity</th>
            <th>Harga</th>
            <th>Asal Barang</th>
            <th>Waktu</th>
            <th>AKSI</th>
        </tr>
        @foreach($barang as $b)
        <tr>
            <td>{{$b->kode_barang}}</td>
            <td>{{$b->nama_barang}}</td>
            <td>{{$b->quantity}}</td>
            <td>RP. {{$b->harga}}</td>
            <td>{{$b->asal_barang}}</td>
            <td>{{$b->waktu}}</td>
            <td><a href="/dashboard/barang/{{$b->id}}/edit">EDIT</a></td>
        </tr>
        @endforeach
        <a href="/dashboard/barang/create_laptop">add data</a>
    </table>
</body>
</html>