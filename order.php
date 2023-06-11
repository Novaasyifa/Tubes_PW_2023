<!DOCTYPE html>
<html>

<head>
    <title>Website E-Commerce</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        /* Reset default browser styles */
        body,
        h1,
        h2,
        h3,
        p,
        ul,
        li,
        form,
        label,
        input,
        textarea,
        button {
            margin: 0;
            padding: 0;
        }

        .body {
            font-family: Arial, sans-serif;
            font-size: 14px;
            line-height: 1.4;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.4rem 7%;
            background-color: #fff;
            border-bottom: 1px solid #fff;
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

        .main {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section-heading {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .product-list {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
        }

        .product-item {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .product-item img {
            max-width: 100%;
            height: auto;
        }

        .product-item h3 {
            margin-top: 10px;
            margin-bottom: 5px;
        }

        .product-item p {
            color: #888;
        }

        .product-item .price {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-item button {
            display: block;
            margin: 0 auto;
            padding: 5px 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .product-item button:hover {
            background-color: #45a
        }

        .order-form {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
            border: 1px solid #ccc;
        }

        .order-form h2 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .input,
        textarea,
        select {
            width: 100%;
            padding: 5px;
            border-radius: 3px;
            border: 1px solid #ccc;
        }

        .textarea {
            height: 80px;
        }

        .button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #45a
        }
    </style>
</head>

<body>
    <nav class="navbar">
        <a href="#" class="navbar-logo">TShop<span>.</span></a>

        <div class="navbar-nav">
            <a href="index.php">Home</a>
            <a href="#about">About</a>
            <a href="#products">Product</a>
            <a href="orders.php">Orders</a>
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
    </nav>
    <!--Navbar end-->

    <main>
        <section class="order-form">
            <h2>Formulir Pemesanan</h2>
            <form>
                <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="address">Alamat:</label>
                    <textarea id="address" name="address" required></textarea>
                </div>

                <div class="form-group">
                    <label for="product">Produk:</label>
                    <select id="product" name="product">
                        <option value="product1">Produk 1</option>
                        <option value="product2">Produk 2</option>
                        <option value="product3">Produk 3</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="quantity">Jumlah:</label>
                    <input type="number" id="quantity" name="quantity" min="1" required>
                </div>

                <button type="submit">Pesan</button>
            </form>
        </section>
    </main>

    <footer>
        <!-- Footer content -->
    </footer>
</body>

</html>