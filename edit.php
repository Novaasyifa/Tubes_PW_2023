<?php

require('functions.php');

$id = $_GET['id'];
$query = query("SELECT * FROM produk WHERE id_produk = $id")[0];

if (isset($_POST['updateproduk'])) {
    if (ubah($_POST) > 0) {
        echo '<script>alert("barang berhasil diubah");window.location.href = "admin.php";</script>';
    } else {
        echo '<script>alert("barang gagal diubah");window.location.href = "admin.php";</script>';
    }
}

require('views/edit.view.php');
