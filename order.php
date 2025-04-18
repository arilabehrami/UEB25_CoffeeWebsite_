

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel="stylesheet" href="style.css">
    <link rel="icon" href="images/logo1.png" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="./script.js" defer></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        .hidden-option {
        display: none;
    }
    </style>
      
    <script>
    function kontrolloPorosine() {
    try {
        let name = document.getElementById("name").value;
        let email = document.getElementById("email").value;
        let address = document.getElementById("address").value;
        let product = document.getElementById("product").value;
        let payment = document.getElementById("payment-method").value;
        let isChecked = document.getElementById("accept-terms").checked;
        let quantity = document.getElementById("product-suggestion").value;


        validateName(name);
        validateEmail(email);
        validateAddress(address);
        validateQuantity(quantity);

        if (!product) throw "Ju lutem zgjidhni një produkt!";
        if (!payment) throw "Ju lutem zgjidhni mënyrën e pagesës!";
        if (!isChecked) throw "Ju duhet të pranoni kushtet dhe rregullat!";

        // Përdorimi i objekteve dhe metodave për manipulim me data dhe numra
        let currentDate = new Date(); // Përdorim objektin Date
        let currentYear = currentDate.getFullYear();
        let dateString = `Data e porosisë: ${currentDate.toLocaleString()}`;
        console.log(dateString);

        // Manipulimi i numrave
        let maxPayment = 999999.99;
        let minPayment = 0.01;
        console.log(`Vlera maksimale e pagesës: ${maxPayment.toExponential()}`);
        console.log(`Vlera minimale e pagesës: ${minPayment.toString()}`);
        console.log(`Vlera e pagesës: ${payment}`);
        console.log(`Vlera e pagesës është NaN: ${isNaN(payment)}`);

       

        setTimeout(function() {
            alert("Porosia u dërgua me sukses!");
        }, 3000);
    } catch (error) {
        alert(`Gabim: ${error}`);
    }
}
function validateQuantity(quantity) {
    if (!quantity || quantity <= 0) {
        throw "Ju lutem shkruani një sasi të vlefshme!";
    }
}
// Funksionet për validimin e të dhënave
function validateName(name) {
    if (!name) throw "Emri është i detyrueshëm!";
}

function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) throw "Email-i nuk është valid!";
}

function validateAddress(address) {
    if (!address) throw "Adresa është e detyrueshme!";
}

function Product(name, price) {
    this.name = name;
    this.price = price;
    this.displayInfo = function() {
        return `Produkti: ${this.name}, Çmimi: ${this.price}`;
    };
}

let product1 = new Product("Americano", 10);
let product2 = new Product("Esspreso", 25);
let product3 = new Product("Makiato", 20);

console.log(product1.displayInfo());
console.log(product2.displayInfo());
console.log(product3.displayInfo());


let emailExample = "arila@example.com";
let emailMatch = emailExample.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/);
if (emailMatch) {
    console.log("Emaili është i vlefshëm");
} else {
    console.log("Emaili është i pavlefshëm");
}

let updatedEmail = emailExample.replace("example.com", "gmail.com");
console.log(`Email i përditësuar: ${updatedEmail}`);

</script>     
</head> 

<body>
    <header>
    <a href="index.php" class="logo">
            <img src="images/logo1.png" alt="Logo" loading="lazy">
        </a>

        <ul class="navbar">
            <li><a href="index.php" >Home</a></li>
            <li><a href="order.php"class="active">Order Now</a></li>
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
               <!--   Email Field -->
                <!-- <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Your Email..." required>
                </div> -->
       
                <!-- Password Field -->
                <!-- <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Password..." required>
                </div> -->
        
                <!-- Submit Button -->
                <!-- <div class="form-group">
                    <input type="submit" value="Login" class="login-btn">
                </div> -->
        
                <!-- Links -->
                <p>Forgot Password? <a href="/reset-password">Reset Now</a></p>
                <p>Don't have an account? <a href="/register">Create One</a></p>
            </form>
        
              
    
    </header>
    

    <section id="order-now">
        <div class="order-image">
            <img src="images/about.jpg" alt="Order Image" >
        </div>
        <div class="container">
            <h1>Porosit tani!</h1>
            
            <form id="order-form">
                <div class="form-group">
                    <label for="name">Emri</label>
                    <input type="text" id="name" name="name" placeholder="Shkruani emrin tuaj" required>
                </div>
    
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="Shkruani email-in tuaj" required>
                </div>
    
                <div class="form-group">
                    <label for="address">Adresa</label>
                    <input type="text" id="address" name="address" placeholder="Shkruani adresën tuaj" required>
                </div>
    
                <div class="form-group">
                    <label for="product">Produkt</label>
                    <select id="product" name="product">
                        <option value="" disabled selected>Zgjidhni nje produkt</option>
                        <option value="Americano" data-price="20">Americano - $20</option>
                        <option value="Esspreso" data-price="30">Espresso - $30</option>
                        <option value="Cappuccino" data-price="40">Cappuccino - $40</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="product-suggestion">Sasia</label>
                    <input list="products" id="product-suggestion" name="product-suggestion" placeholder="Shkruani sasine" required>
                    <datalist id="products">
                        <option value="1">
                        <option value="2">
                        <option value="3">
                    </datalist>
                </div>                

                <div class="form-group">
                    <label for="payment-method">Mënyra e Pagesës</label>
                    <select id="payment-method" name="payment-method">
                        <option value="" disabled selected>Zgjidhni një mënyrë pagese</option>
                        <option value="Credit Card">Kartë krediti</option>
                        <option value="PayPal">PayPal</option>
                        <option value="Cash">Cash</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>
                        <input type="checkbox" id="accept-terms" > Pranoj kushtet dhe rregullat
                    </label>
                    <button type="button" onclick="kontrolloPorosine()">Dërgo Porosinë</button>
                
                </div>

                <div class="form-group">
                    <label for="order-date">Data e Porosisë</label>
                    <input type="date" id="order-date" name="order-date" readonly>
                </div>
                
                <p id="total-price">Çmimi total: $0.00</p>

               

            </form>
        </div>
    </section>
    

    <footer class="footer">



<?php
include 'includes/orderOOP.php';

$coffees = [
    new SpecialtyCoffee("Espresso", "Italy", "Dark", "Bold, Smooth"),
    new SpecialtyCoffee("Latte", "France", "Medium", "Creamy, Mild"),
    new SpecialtyCoffee("Cappuccino", "Brazil", "Medium-Dark", "Frothy, Rich"),
    new SpecialtyCoffee("Americano", "USA", "Light", "Smooth, Mellow")
];

echo "<div style='margin: 20px; font-weight: bold; text-align: center; color: white;'>";
echo "<h2 style='margin-bottom: 30px;'>“You can't buy happiness, but you can buy coffee, and that's pretty close.” ☕</h2>";

foreach ($coffees as $coffee) {
    echo "<div style='margin-bottom: 10px;'>" . $coffee->displayInfo() . "</div>";
}

echo "</div>";
?>

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



