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

  <div class="container-fluid py-2">
    <div class="row">
        <div class="col-md-12">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="nama" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama_produk">
                </div>
                <div class="mb-3">
                  <label for="harga" class="form-label">Harga</label>
                  <input type="number" class="form-control" id="harga" placeholder="Harga" name="harga">
                </div>
                <div class="mb-3">
                  <label for="kategori" class="form-label">Kategori</label>
                  <input type="text" class="form-control" id="kategori" placeholder="Kategori" name="kategori">
                </div>
                <div class="mb-3">
                  <label for="stok" class="form-label">Stok</label>
                  <input type="number" class="form-control" id="stok" placeholder="Stok" name="stok">
                </div>
                <div class="mb-3">
                  <label for="gambar" class="form-label">Gambar</label>
                  <input type="file" class="form-control" id="gambar" placeholder="Gambar" name="gambar">
                </div>
                <div class="mb-3">
                  <label for="save" class="form-label"></label>
                  <input type="submit" name="submit" class="form-control btn btn-primary" id="save" value="Simpan">
                </div>
                
            </form>
        </div>
    </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>