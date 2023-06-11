<?php

require('functions.php');
$produk = query("SELECT * FROM produk");

if (isset($_POST["cari"])) {
  $produk = cari($_POST["keyword"]);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TShop</title>

  <!--Fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet" />

  <!--Feather Icons-->
  <script src="https://unpkg.com/feather-icons"></script>

  <!--My Style-->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!--Navbar start-->
  <nav class="navbar">
    <a href="#" class="navbar-logo">TShop<span>.</span></a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#about">About</a>
      <a href="#products">Product</a>
      <a href="order.php">Orders</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="navbar-extra">
      <a href="#" id="search-button"><i data-feather="search"></i></a>
      <a href="#" id="shopping-cart-button"><i data-feather="shopping-cart"></i></a>
      <a href="login.php" id="login-button"><i data-feather="user"></i></a>
      <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>

    <!-- Search form start-->
    <div class="search-form">
      <form action="" method="post">
        <input type="search" id="search-button" placeholder="search here...">
        <label for="search-box"><i data-feather="search"></i></label>
      </form>
    </div>
    <!-- Search form end-->

    <!-- shopping cart start-->
    <div class="shopping-cart">
      <div class="cart-item">
        <img src="img/products/1.jpg" alt="Marc o" />
        <div class="item-detail">
          <h3>Marc o</h3>
          <div class="item-price">Rp.2000.000</div>
        </div>
        <i data-feather="trash-2" class="delete-item"></i>
      </div>
    </div>
    <!-- shopping cart end-->
  </nav>
  <!--Navbar end-->

  <!--Hero Section start-->
  <section class="hero" id="home">
    <main class="content">
      <h1>Ayo belanja di <span>TShop</span></h1>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo, magni
        laboriosam aliquid modi provident eos distinctio delectus, quas vel
        laborum dolores dicta repellat saepe tenetur! Asperiores id impedit
        nulla corrupti.
      </p>
      <a href="#" class="cta">Beli Sekarang</a>
    </main>
  </section>
  <!--Hero Section end-->

  <!--About Section start-->
  <section id="about" class="about">
    <h2>Tentang Kami</h2>

    <div class="row">
      <div class="about-img">
        <img src="img/tentang-kami.jpg" alt="Tentang Kami" />
      </div>
      <div class="content">
        <h3>Kenapa memilih online shop kami?</h3>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur
          dignissimos, impedit sed commodi sint voluptas!
        </p>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit.
          Exercitationem facere animi alias possimus facilis eos aspernatur
          vitae illo ipsum nihil?
        </p>
      </div>
    </div>
  </section>
  <!--About Section end-->

  <!--Produk Section start-->
  <section class="products" id="products">
    <h2>Produk Kami</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio quos
      commodi molestias culpa neque aperiam!
    </p>

    <div class="row">
      <?php foreach ($produk as $pro) : ?>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="<?= $pro['gambar']; ?>" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3><?= $pro['nama_produk']; ?></h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.<?= number_format($pro['harga'], 2, ',', '.'); ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <!--Produk Section end-->

  <!--Contact Section start-->
  <section id="contact" class="contact">
    <h2>kontak Kami</h2>
    <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit labore
      recusandae facere vitae assumenda earum accusantium fugiat.
    </p>

    <div class="row">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63385.462181390336!2d107.612067537775!3d-6.819449227196827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e103befbd76d%3A0x1bb5bfc79b0edef1!2sLembang%2C%20Kec.%20Lembang%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1683103324877!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

      <form action="">
        <div class="input-group">
          <i data-feather="user"></i>
          <input type="text" placeholder="nama" />
        </div>
        <div class="input-group">
          <i data-feather="mail"></i>
          <input type="text" placeholder="email" />
        </div>
        <div class="input-group">
          <i data-feather="phone"></i>
          <input type="text" placeholder="no hp" />
        </div>
        <button type="submit" class="btn">Hubungi Penjual</button>
      </form>
    </div>
  </section>
  <!--Contact Section end-->

  <!--Footer start-->
  <footer>
    <div class="socials">
      <a href="#"><i data-feather="instagram"></i></a>
      <a href="#"><i data-feather="twitter"></i></a>
      <a href="#"><i data-feather="facebook"></i></a>
    </div>

    <div class="links">
      <a href="#home">Home</a>
      <a href="#about">Tentang Kami</a>
      <a href="#produk">Produk</a>
      <a href="#contact">Kontak</a>
    </div>

    <div class="credit">
      <p>Created by <a href="">Nova Asyifa</a>. | &copy; 2023.</p>
    </div>
  </footer>
  <!--Footer end-->

  <!--Modal box item detail start-->
  <div class="modal" id="item-detail-modal">
    <?php foreach ($produk as $pd) : ?>
      <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
          <img src="<?= $pd['gambar']; ?>" alt="Product 1" />
          <div class="product-content">
            <h3><?= $pd['nama_produk']; ?></h3>
            <p>
              Lorem ipsum dolor sit, amet consectetur adipisicing elit. Harum,
              voluptatibus.
            </p>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.<?= number_format($pd['harga'], 2, ',', '.'); ?></div>
            <a href="#"><i data-feather="shopping-cart"></i><span>Add to cart</span></a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <!--Modal box item detail end-->

  <!--Feather Icons-->
  <script>
    feather.replace();
  </script>

  <!--My Javascript-->
  <script src="js/script.js"></script>
</body>

</html>