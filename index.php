<?php

include "config.php";
require "class/database.php";

$db = new Database();

$mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
$act = isset($_GET['act']) ? $_GET['act'] : 'list';

include "template/header.php";
include "template/sidebar.php";
include "template/footer.php";

echo '<div class="main-content">';

switch ($mod) {
    case 'home':
        echo "<h2>Selamat Datang</h2>";
        echo "<p>Silakan akses menu di samping.</p>";
        break;

    case 'artikel':
        if ($act == 'tambah') {
            include "module/artikel/tambah.php";
        } elseif ($act == 'ubah') {
            include "module/artikel/ubah.php";
        } elseif ($act == 'hapus') {
            $id = $_GET['id'];
            $db->delete("data_barang", "id_barang = '$id'");
            header("Location: index.php?mod=artikel");
        } else {
            include "module/artikel/index.php";
        }
        break;

    default:
        echo "<h2>404 Not Found</h2>";
}

echo '</div>';

include "template/footer.php";
?>