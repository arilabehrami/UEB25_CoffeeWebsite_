<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo1.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="./script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <style>
    table {
    width: 100%;
    border-spacing: 8px; 
    /* background-color:black;  */
    /* border: 1px solid #ddd;  */
}

th, td {
    text-align: left;
    padding: 12px; 
    border: 1px solid #ddd;
}

th {
    background-color: #f1f1f1; 
    color: #333; 
    font-weight: bold; 
}

td {
    background-color: #ffffff; 
    color: #555; 
}
    </style>
</head>
<body>

    <header>
    <a href="index.php" class="logo">
            <img src="images/logo1.png" alt="Logo" loading="lazy">
        </a>

        <ul class="navbar">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="order.php">Order Now</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="contact.php">Contact</a></li>
        </ul>
    
        <div class="header-icon">
            <i class='bx bx-cart'id="cart-icon"></i>
            <i class='bx bx-search' id="search-icon"></i>
            <i class='bx bx-user' id="user-icon"></i>
        </div>

        <div class="search-box">
            <form action="/search" method="GET">
                <input type="search" id="search" name="query" placeholder="Search Here..." required>
                <button type="submit">Search</button>
            </form>
        </div>
        <div class="cart" id="cart">
            <h2>Shporta</h2>
            <ul id="cart-items" aria-live="polite">
 
            </ul>
            <div class="cart-actions">
                <button id="checkout">Checkout</button>
                <button id="clear-cart">Pastro</button>
            </div>
        </div>

        <div class="user">
            <h2>Login Now</h2>
            <form action="/login" method="POST">
                <!-- Email Field -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email..." required>
                </div>
        
                <!-- Password Field -->
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password..." required>
                </div>
        
                <!-- Submit Button -->
                <div class="form-group">
                    <input type="submit" value="Login" class="login-btn">
                </div>
        
                <!-- Links -->
                <p>Forgot Password? <a href="/reset-password">Reset Now</a></p>
                <p>Don't have an account? <a href="/register">Create One</a></p>
            </form>
        </div>
        
    </header>


    <body onload="pershendetje1()">

    <section class="products" id="products">
    <div class="products-container">
        <div class="box">
            <img src="images/menu-1.png" alt="Kjo eshte Americano">
            <h3>Americano</h3>
            <div class="content">
                <span>25&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Americano" data-product-price="25">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-2.png" alt="Kjo eshte Espresso">
            <h3>Espresso</h3>
            <div class="content">
                <span>20&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Espresso" data-product-price="20">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-3.png" alt="Kjo eshte Cappuccino">
            <h3>Cappuccino</h3>
            <div class="content">
                <span>25&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Cappuccino" data-product-price="25">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-4.png" alt="Kjo eshte Latte">
            <h3>Latte</h3>
            <div class="content">
                <span>&euro;30</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Latte" data-product-price="30">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-5.png" alt="Kjo eshte Macchiato">
            <h3>Macchiato</h3>
            <div class="content">
                <span>25&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Macchiato" data-product-price="25">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-6.png" alt="Kjo eshte Mocha">
            <h3>Mocha</h3>
            <div class="content">
                <span>15&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Mocha" data-product-price="15">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-7.png" alt="Kjo eshte Cortado">
            <h3>Cortado</h3>
            <div class="content">
                <span>20&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Cortado" data-product-price="20">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-8.png" alt="Kjo eshte Ristretto">
            <h3>Ristretto</h3>
            <div class="content">
                <span>20&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Ristretto" data-product-price="20">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/menu-9.png" alt="Kjo eshte Affogato">
            <h3>Affogato</h3>
            <div class="content">
                <span>30&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Affogato" data-product-price="30">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/cart-item1.png" alt="Kjo eshte Turkish Coffee">
            <h3>Turkish Coffee </h3>
            <div class="content">
                <span>35&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Turkish" data-product-price="35">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/cart-item2.png" alt="Kjo eshte Coffee">
            <h3>Coffee</h3>
            <div class="content">
                <span>25&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Coffee" data-product-price="25">Add to Cart</button>
            </div>
        </div>
        <div class="box">
            <img src="images/cart-item3.png" alt="Kjo eshte Coffee">
            <h3>Coffee</h3>
            <div class="content">
                <span>25&euro;</span>
                <button class="btn add-to-cart" data-product-id="1" data-product-name="Coffee" data-product-price="25">Add to Cart</button>
            </div>
        </div>
    </div>
    </section>


    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-col">
                    <h4>Company</h4>
                    <ul>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="products.php">Our Services</a></li>
                        <li><a href="contact.php">Privacy Policy</a></li>
                        <li><a href="order.php">Order Now</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Get help</h4>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="products.php" target="_blank">Shipping</a></li>
                        <li><a href="contact.php" target="_blank">Returns</a></li>
                        <li><a href="#">Payment Options</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h4>Follow us</h4>
                    <div class="social-links">
                    <ul>
                        <li><a href="https://www.facebook.com/" aria-label="Facebook"><i class='bx bxl-facebook'></i></a></li>
                        <li><a href="https://www.instagram.com/" aria-label="Instagram"><i class='bx bxl-instagram'></i></a></li>
                        <li><a href="https://www.twitter.com/" aria-label="Twitter"><i class='bx bxl-twitter'></i></a></li>
                        <li><a href="https://www.youtube.com/" aria-label="Youtube"><i class='bx bxl-youtube'></i></a></li>
                    </ul>
                    </div>
            </div>
        </div>
    </footer>
    
    
</body>
</html>
    
