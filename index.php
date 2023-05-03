<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TShop</title>
    <style>
      :root {
        --primary: #5bb6a2;
        --bg: #fff;
      }

      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        outline: none;
        border: none;
        text-decoration: none;
      }

      html {
        scroll-behavior: smooth;
      }

      body {
        font-family: "poppins", sans-serif;
        background-color: var(--bg);
        color: #020101;
        min-height: 2000px;
      }

      /* Navbar */
      .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1.4rem 7%;
        background-color: rgba(2, 1, 1, 0, 8);
        border-bottom: 1px solid #365f56;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 9999;
      }

      .navbar .navbar-logo {
        font-size: 2.2rem;
        font-weight: 700;
        color: #7efde1;
      }

      .navbar .navbar-logo span {
        color: var(--primary);
      }

      .navbar .navbar-nav a {
        color: #000000;
        display: inline-block;
        font-size: 1.1rem;
        margin: 0 1rem;
      }

      .navbar .navbar-nav a:hover {
        color: var(--primary);
      }

      .navbar .navbar-nav a:hover::after {
        content: "";
        display: block;
        padding-bottom: 0.5rem;
        border-bottom: 0.1rem solid var(--primary);
        transition: 0.2s linear;
      }

      .navbar .navbar-nav a:hover::after {
        transform: scaleX(0.5);
      }

      .navbar .navbar-extra a {
        color: #000000;
        margin: 0 0.5rem;
      }

      .navbar .navbar-extra a:hover {
        color: var(--primary);
      }

      #hamburger-menu {
        display: none;
      }

      /* Navbar search form */
      .navbar .search-form {
        position: absolute;
        top: 100%;
        right: 6%;
        background-color: #fff;
        width: 40rem;
        height: 4rem;
        display: flex;
        align-items: center;
        transform: scaleY(0);
        transform-origin: top;
        transition: 0.3s;
      }

      .navbar .search-form.active {
        transform: scaleY(1);
      }

      .navbar .search-form input {
        height: 100%;
        width: 100%;
        font-size: 1.4rem;
        color: #000000;
        padding: 1rem;
      }

      .navbar .search-form label {
        cursor: pointer;
        font-size: 2rem;
        margin-right: 1.5rem;
        color: #000000;
      }

      /* Shopping cart */
      .shopping-cart {
        position: absolute;
        top: 100%;
        right: -100%;
        height: 100vh;
        width: 35rem;
        padding: 0 1.5rem;
        background-color: #fff;
        color: #365f56;
        transition: 0.3s;
      }

      .shopping-cart.active {
        right: 0;
      }

      .shopping-cart .cart-item {
        margin: 2rem 0;
        display: flex;
        align-items: center;
        gap: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px dashed #333;
        position: relative;
      }

      .shopping-cart img {
        height: 6rem;
      }

      .shopping-cart h3 {
        font-size: 1.4rem;
        padding-bottom: 0.5rem;
      }

      .shopping-cart .item-price {
        font-size: 1rem;
      }

      .shopping-cart .delete-item {
        position: absolute;
        right: 1rem;
        cursor: pointer;
      }

      .shopping-cart .delete-item:hover {
        color: #000000;
      }

      /* Hero section */
      .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        background-image: url("../Tubes/img/header.jpg");
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
      }

      .hero::after {
        content: "";
        display: block;
        position: absolute;
        width: 100%;
        height: 30%;
        bottom: 0;
        background: linear-gradient(
          0deg,
          rgba(255, 255, 255, 1) 8%,
          rgba(255, 255, 255, 0) 50%
        );
      }

      .hero .content {
        padding: 1.4rem 7%;
        max-width: 60rem;
      }

      .hero .content h1 {
        font-size: 3em;
        color: #fff;
        text-shadow: 1px 1px 3px rgba(255, 255, 255, 0.9);
        line-height: 1.2;
      }

      .hero .content h1 span {
        color: #7efde1;
      }

      .hero .content p {
        font-size: 1.5rem;
        margin-top: 0.5rem;
        line-height: 1.4;
        font-weight: 100;
        text-shadow: 1px 1px 3px rgba(255, 255, 255, 0.9);
        color: #fff;
        mix-blend-mode: difference;
      }

      .hero .content .cta {
        margin-top: 1rem;
        display: inline-block;
        padding: 1rem 3rem;
        font-size: 1.4rem;
        color: #fff;
        background-color: var(--primary);
        border-radius: 0.5rem;
        box-shadow: 1px 1px 3px rgba(255, 255, 255, 0.9);
      }

      /* About section */
      .about,
      .products,
      .contact {
        padding: 8rem 7% 1.4rem;
      }

      .about h2,
      .products h2,
      .contact h2 {
        text-align: center;
        color: #000000;
        font-size: 2.3rem;
        margin-bottom: 3rem;
      }

      .about .row {
        display: flex;
      }

      .about .row .about-img {
        flex: 1 1 45rem;
      }

      .about .row .about-img img {
        width: 100%;
      }

      .about .row .content {
        flex: 1 1 35rem;
        padding: 0 1rem;
      }

      .about .row .content h3 {
        font-size: 1.8rem;
        margin-bottom: 1rem;
      }

      .about .row .content p {
        margin-bottom: 0.8rem;
        font-size: 1.4rem;
        font-weight: 300;
        line-height: 1.6;
      }

      /* Produk Section */
      .products h2,
      .contact h2 {
        margin-bottom: 0.5rem;
      }
      .products p,
      .contact p {
        text-align: center;
        max-width: 30rem;
        margin: auto;
        font-weight: 100;
        line-height: 1.6;
      }

      .products .row {
        display: flex;
        flex-wrap: wrap;
        grid-template-columns: repeat(auto-fit, minmax(30rem, ifr));
        gap: 1.5rem;
        margin-top: 4rem;
      }

      .products .product-card {
        text-align: center;
        border: 1px solid #666;
        padding: 2rem;
      }

      .products .product-icons {
        display: flex;
        justify-content: center;
        gap: 0.5rem;
      }

      .products .product-icons a {
        width: 4rem;
        height: 4rem;
        color: #000000;
        margin: 0.4rem;
        border: 1px solid #666;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
      }

      .products .product-icons a:hover {
        background-color: var(--primary);
        border: 1px solid var(--primary);
      }

      .products .product-image {
        padding: 1rem 0;
      }

      .products .product-image img {
        height: 25rem;
      }

      .products .product-content h3 {
        font-size: 2rem;
      }

      .products .product-stars {
        font-size: 1.5rem;
        padding: 0.8rem;
        color: #f7f45f;
      }

      .products .product-stars .star-full {
        fill: #f7f45f;
      }

      .products .product-price {
        font-size: 1rem;
      }

      /* Contact section */
      .contact .row {
        display: flex;
        margin-top: 2rem;
        background-color: #5bb6a2;
      }

      .contact .row map {
        flex: 1 1 45rem;
        width: 100%;
        object-fit: cover;
      }

      .contact .row form {
        flex: 1 1 45rem;
        padding: 5rem 2rem;
        text-align: center;
      }

      .contact .row form .input-group {
        display: flex;
        align-items: center;
        margin-top: 2rem;
        background-color: var(--bg);
        border: 1px solid #5bb6a2;
        padding-left: 2rem;
      }

      .contact .row form .input-group input {
        width: 100%;
        padding: 1.5rem;
        font-size: 1rem;
        background: none;
        color: #365f56;
      }

      .contact .row form .btn {
        margin-top: 3rem;
        display: inline-block;
        padding: 1rem 3rem;
        font-size: 1rem;
        color: #365f56;
        background-color: #fff;
        cursor: pointer;
      }

      /* Footer */
      footer {
        background-color: var(--primary);
        text-align: center;
        padding: 1rem 0 3rem;
        margin-top: 3rem;
      }

      footer .socials {
        padding: 1rem 0;
      }

      footer .socials a {
        color: #fff;
        margin: 1rem;
      }

      footer .socials a:hover,
      footer .links a:hover {
        color: black;
      }

      footer .links {
        margin-bottom: 1.3rem;
      }

      footer .links a {
        color: #fff;
        padding: 0.7rem 1rem;
      }

      footer .credit {
        font-size: 0.8rem;
      }

      footer .credit a {
        color: #000000;
        font-weight: 700;
      }

      /* Modal box */
      /* Item detail */
      .modal {
        display: none;
        position: fixed;
        z-index: 9999;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.6);
      }

      .modal-container {
        position: relative;
        background-color: #fefefe;
        color: #365f56;
        margin: 15% auto;
        padding: 1.2rem;
        border: 1px solid #666;
        width: 80%;
        animation: animateModal 0.5s;
      }

      /* Modal animation */
      @keyframes animateModal {
        form {
          top: -300px;
          opacity: 0;
        }
        to {
          top: 0;
          opacity: 1;
        }
      }

      .modal-container .close-icon {
        position: absolute;
        right: 1rem;
      }

      .modal-content {
        display: flex;
        flex-wrap: nowrap;
      }

      .modal-content img {
        height: 18rem;
        margin-right: 2rem;
        margin-bottom: 2rem;
      }

      .modal-content p {
        font-size: 1.2rem;
        line-height: 1.8rem;
        margin-top: 1.2rem;
      }

      .modal-content a {
        display: flex;
        gap: 1rem;
        width: 12rem;
        background-color: var(--primary);
        color: #fff;
        margin-top: 1rem;
        padding: 1rem 1.6rem;
      }

      /* Media Queries */
      /* Laptop */
      @media (max-width: 1366px) {
        html {
          font-size: 75%;
        }
      }

      /* Tablet */
      @media (max-width: 758px) {
        html {
          font-size: 62.5%;
        }

        #hamburger-menu {
          display: inline-block;
        }

        .navbar .navbar-nav {
          position: absolute;
          top: 100%;
          right: -100%;
          background-color: #fff;
          width: 30rem;
          height: 100vh;
          transition: 0.3s;
        }

        .navbar .navbar-nav.active {
          right: 0;
        }

        .navbar .navbar-nav a {
          color: #365f56;
          display: block;
          margin: 1.5rem;
          padding: 0.5rem;
          font-size: 1.5rem;
        }

        .navbar .navbar-nav a::after {
          transform-origin: 0 0;
        }

        .navbar .navbar-nav a:hover::after {
          transform: scaleX(0.2);
        }

        .about .row {
          flex-wrap: wrap;
        }

        .about .row .about-img img {
          height: 24rem;
          object-fit: cover;
          object-position: center;
        }

        .about .row .content {
          padding: 0;
        }

        .about .row .content h3 {
          margin-top: 1rem;
          font-size: 2rem;
        }

        .about .row .content p {
          font-size: 1.6rem;
        }

        .contact .row {
          flex-wrap: wrap;
        }

        .contact .row map {
          height: 30rem;
        }

        .contact .row form {
          padding-top: 0;
        }

        .modal-content {
          flex-wrap: wrap;
        }
      }

      /* Mobile Phone */
      @media (max-width: 450px) {
        html {
          font-size: 55%;
        }
      }
    </style>

    <!--Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />

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
        <a href="#products">Produk</a>
        <a href="#contact">kontak</a>
      </div>

      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart-button"
          ><i data-feather="shopping-cart"></i
        ></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>

      <!-- Search form start-->
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
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
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#" class="item-detail-button"
              ><i data-feather="eye"></i
            ></a>
          </div>
          <div class="product-image">
            <img src="img/products/1.jpg" alt="Product 1" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/2.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/3.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/4.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/5.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/6.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/7.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/8.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/9.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/10.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/11.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/12.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
        <div class="product-card">
          <div class="product-icons">
            <a href="#"><i data-feather="shopping-cart"></i></a>
            <a href="#"><i data-feather="eye"></i></a>
          </div>
          <div class="product-image">
            <img src="img/products/13.jpg" alt="Product 2" />
          </div>
          <div class="product-content">
            <h3>Marc o bag</h3>
            <div class="product-stars">
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
              <i data-feather="star" class="star-full"></i>
            </div>
            <div class="product-price">Rp.2000.000</div>
          </div>
        </div>
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
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63385.462181390336!2d107.612067537775!3d-6.819449227196827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e103befbd76d%3A0x1bb5bfc79b0edef1!2sLembang%2C%20Kec.%20Lembang%2C%20Kabupaten%20Bandung%20Barat%2C%20Jawa%20Barat!5e0!3m2!1sid!2sid!4v1683103324877!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>

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
      <div class="modal-container">
        <a href="#" class="close-icon"><i data-feather="x"></i></a>
        <div class="modal-content">
          <img src="img/products/1.jpg" alt="Product 1" />
          <div class="product-content">
            <h3>Marc o bag</h3>
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
            <div class="product-price">Rp.2000.000</div>
            <a href="#"
              ><i data-feather="shopping-cart"></i><span>Add to cart</span></a
            >
          </div>
        </div>
      </div>
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
