<?php
// Proses Simpan saat tombol ditekan
if (isset($_POST['submit'])) {
    $data = [
        'nama' => $_POST['nama'],
        'kategori' => $_POST['kategori'],
        'harga_beli' => $_POST['harga_beli'],
        'harga_jual' => $_POST['harga_jual'],
        'stok' => $_POST['stok']
    ];
    $db->insert("data_barang", $data);
    header("Location: index.php?mod=artikel"); // Redirect setelah simpan
}
?>

<h2>Tambah Barang</h2>
<form method="POST" action="">
    <p>Nama Barang: <input type="text" name="nama"></p>
    <p>Kategori: 
        <select name="kategori">
            <option value="Elektronik">Elektronik</option>
            <option value="Komputer">Komputer</option>
        </select>
    </p>
    <p>Harga Beli: <input type="number" name="harga_beli"></p>
    <p>Harga Jual: <input type="number" name="harga_jual"></p>
    <p>Stok: <input type="number" name="stok"></p>
    <button type="submit" name="submit">Simpan</button>
</form>