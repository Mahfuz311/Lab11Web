<?php
$data = $db->query("SELECT * FROM data_barang");
?>

<h2>Data Barang</h2>
<a href="index.php?mod=artikel&act=tambah" class="btn btn-add">Tambah Data</a>
<br><br>

<<table>
    <thead>
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama Barang</th>
            <th>Kategori</th>
            <th>Harga Jual</th>
            <th>Harga Beli</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($data) : ?>
            <?php $i = 1; ?>
            <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $i++; ?></td>
                
                <td>
                    <?php if (!empty($row['gambar'])): ?>
                        <img src="gambar/<?= $row['gambar']; ?>" width="80" alt="<?= $row['nama']; ?>">
                    <?php else: ?>
                        <span style="color:red; font-size:12px;">No Image</span>
                    <?php endif; ?>
                </td>
                
                <td><?= $row['nama']; ?></td>
                <td><?= $row['kategori']; ?></td>
                <td>Rp. <?= number_format($row['harga_jual'], 0, ',', '.'); ?></td>
                <td>Rp. <?= number_format($row['harga_beli'], 0, ',', '.'); ?></td>
                <td><?= $row['stok']; ?></td>
                <td>
                    <a href="index.php?mod=artikel&act=ubah&id=<?= $row['id_barang']; ?>" class="btn btn-edit">Ubah</a>
                    <a href="index.php?mod=artikel&act=hapus&id=<?= $row['id_barang']; ?>" class="btn btn-del" onclick="return confirm('Yakin hapus?')">Hapus</a>
                </td>
            </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="8" style="text-align:center;">Belum ada data barang.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>