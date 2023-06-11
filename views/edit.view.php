<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
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

    nav ul li {
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
        <li><a href="#">Pesanan</a></li>
        <li><a href="#">Pelanggan</a></li>
        <li><a href="#">Login</a></li>
      </ul>
    </nav>
  </header>


  <form action="" method="post" autocomplete="off" enctype="multipart/form-data" class="mt-5">
    <!-- Agar nama Gambar lama tidak berubah -->
    <input type="hidden" name="id_produk" value="<?= $query['id_produk']; ?>">
    <input type="hidden" name="gambarLama">
    <input type="text" name="nama_produk" value="<?= $query['nama_produk'];  ?>" placeholder="Nama Produk" class="form-control" required>
    <br>
    <input type="text" name="kategori" value="<?= $query['kategori'];   ?>" placeholder="Kategori" class="form-control" required>
    <br>
    <input type="number" name="stok" value=<?= $query['stok']; ?> placeholder="Stok" class="form-control" required>
    <br>
    <input type="number" name="harga" value=<?= $query['harga']; ?> placeholder="Harga" class="form-control" required>
    <br>
    <img src="<?= $query['gambar']; ?>" width="40" alt="<?= $query['gambar']; ?>"> <br>
    <input type="file" name="gambar" class="form-control">
    <br>
    <div class="modal-footer">
      <button type="submit" name="updateproduk" class="btn btn" style="background-color:#E3BEC6 ;">Submit</button>
    </div>
  </form>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>