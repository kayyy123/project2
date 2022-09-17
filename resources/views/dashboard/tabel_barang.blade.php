<h2>TABEL BARANG</h2>
<select>
    <option value="">laptop</option>
    <option value="">keyboard</option>
    <option value="">mouse</option>
    <option value="">infocus</option>
    <option value="">printer</option>
</select>

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
        <td><a href="/dashboard/{{$b->kode_barang}}/edit">EDIT</a></td>
    </tr>
    @endforeach
    <a href="/dashboard/create_laptop">add data</a>
</table>