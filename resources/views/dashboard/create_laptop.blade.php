<h1>CREATE LAPTOP</h1>

<form action="/dashboard/store" method="POST">
    @csrf
    <input type="text" name="kode_barang" placeholder="Masukan Kode Barang"><br>
    <input type="text" name="nama_barang" placeholder="Masukan Nama Barang"><br>
    <input type="text" name="quantity" placeholder="Masukan Quantity"><br>
    <input type="text" name="harga" placeholder="Masukan harga"><br>
    <input type="text" name="asal_barang" placeholder="Masukan asal barang"><br>
    <input type="text" name="waktu" placeholder="Masukan waktu"><br>
    <input type="submit" name="submit" value="save">
</form>