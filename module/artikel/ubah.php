<?php
$id = $_GET['id'];
// Ambil data lama
$row = $db->get("data_barang", "id_barang = '$id'");

// Proses Update saat tombol ditekan
if (isset($_POST['submit'])) {
    $data = [
        'nama' => $_POST['nama'],
        'kategori' => $_POST['kategori'],
        'harga_beli' => $_POST['harga_beli'],
        'harga_jual' => $_POST['harga_jual'],
        'stok' => $_POST['stok']
    ];
    $db->update("data_barang", $data, "id_barang = '$id'");
    header("Location: index.php?mod=artikel");
}
?>

<h2>Ubah Barang</h2>
<form method="POST" action="">
    <p>Nama Barang: <input type="text" name="nama" value="<?= $row['nama']; ?>"></p>
    <p>Kategori: 
        <select name="kategori">
            <option value="Elektronik" <?= ($row['kategori'] == 'Elektronik') ? 'selected' : ''; ?>>Elektronik</option>
            <option value="Komputer" <?= ($row['kategori'] == 'Komputer') ? 'selected' : ''; ?>>Komputer</option>
        </select>
    </p>
    <p>Harga Beli: <input type="number" name="harga_beli" value="<?= $row['harga_beli']; ?>"></p>
    <p>Harga Jual: <input type="number" name="harga_jual" value="<?= $row['harga_jual']; ?>"></p>
    <p>Stok: <input type="number" name="stok" value="<?= $row['stok']; ?>"></p>
    <button type="submit" name="submit">Update</button>
</form>