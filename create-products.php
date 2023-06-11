<?php

require('functions.php');

if (isset($_POST['submit'])) {
  unset($_POST['submit']);

  $gambar = uploadImage($_FILES['gambar'], 'img/uploads');
  $_POST['gambar'] = $gambar;
  $result = createData($_POST, 'produk');

  echo "<script>
    alert('data berhasil ditambahkan');
    window.location.href='admin.php';
    </script>";
}

// Jika tombol name "cari" ditekan
if (isset($_POST["cari"])) {
  $produk = cari($_POST["keyword"]);
}

require('views/create-products.view.php');
