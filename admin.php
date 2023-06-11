<?php

require('functions.php');
$produk = query("SELECT * FROM produk");

// tombol cari ditekan
if (isset($_POST["cari"])) {
  $produk = cari($_POST["keyword"]);
}



?>

<!DOCTYPE html>
<html>

<head>
  <title>Admin Dashboard E-Commerce</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #f1f1f1;
      padding: 20px;
    }

    header {
      background-color: #5bb6a2;
      color: #fff;
      padding: 20px;
      display: flex;
      justify-content: space-between;
    }

    header h1 {
      font-size: 24px;
    }

    nav ul {
      list-style-type: none;
      display: flex;
    }

    nav ul li a {
      color: #fff;
      margin-left: 10px;
    }
  </style>
</head>

<body>
  <header>
    <h1>TShop Admin Dashboard</h1>
    <nav>
      <ul>
        <li><a href="#">Beranda</a></li>
        <li><a href="#">Produk</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </nav>
  </header>
  <br><br>


  <!-- Kolom Search -->
  <form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="search..." autocomplete="off">
    <button type="submit" name="cari" style="background-color:lightblue;">Cari!</button>

  </form>
  <br>

  <!--tambah-->
  <div class="container">
    <div class="row">
      <div class="col-6 py-2">
        <a href="create-products.php" class="btn btn-primary btn-sm">Tambah</a>
      </div>

      <div class="col-md-12">
        <table class="table table-striped" cellpadding="10" cellspacing="0">
          <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>Nama Produk</th>
            <th>Harga</th>
            <th>Kategori</th>
            <th>Stok</th>
          </tr>

          <?php $i = 1; ?>
          <?php foreach ($produk as $pd) : ?>
            <tr>
              <td><?= $i; ?></td>
              <td>
                <a href="edit.php?id=<?= $pd["id_produk"]; ?>">ubah</a> |
                <a href="delete.php?id=<?= $pd["id_produk"]; ?>" onclick="return confirm('yakin?');">hapus </a>
              </td>
              <td><img src="<?= $pd["gambar"] ?>" width="100"></td>
              <td><?= $pd["nama_produk"] ?></td>
              <td>Rp. <?= number_format($pd["harga"], 2, ',', '.') ?></td>
              <td><?= $pd["kategori"] ?></td>
              <td><?= $pd["stok"] ?></td>
            </tr>
            <?php $i++; ?>
          <?php endforeach; ?>

        </table>
      </div>
    </div>
  </div>


  <footer>
    <p>Created by <a href="">Nova Asyifa</a>. | &copy; 2023.</p>
  </footer>
</body>

</html>