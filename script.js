// 1. Aktivizimi dhe çaktivizimi i seksioneve të ndryshme
let search=document.querySelector('.search-box');
let cart=document.querySelector('.cart');
let user=document.querySelector('.user');
// Funksionet për klikim të ikonave
document.querySelector('#search-icon').onclick = () => {
    search.classList.toggle('active');
    cart.classList.remove('active');
    user.classList.remove('active');
}
document.querySelector('#cart-icon').onclick = () => {
    cart.classList.toggle('active');
    search.classList.remove('active');
    user.classList.remove('active');
}
document.querySelector('#user-icon').onclick = () => {
    user.classList.toggle('active');
    search.classList.remove('active');
    cart.classList.remove('active');
}
// 2. Checkout
document.getElementById('checkout').addEventListener('click', function() {
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var product = document.getElementById('product').value;
    var payment = document.getElementById('payment').value;
    var total = document.getElementById('total').textContent;

    document.getElementById('summary-name').textContent = "Emri: " + name;
    document.getElementById('summary-email').textContent = "Email: " + email;
    document.getElementById('summary-address').textContent = "Adresa: " + address;
    document.getElementById('summary-product').textContent = "Produkt: " + product;
    document.getElementById('summary-payment').textContent = "Pagesa: " + payment;
    document.getElementById('summary-total').textContent = "Totali: " + total;

    document.getElementById('order-summary').style.display = 'block';
});


// 3. Shtimi i produkteve në shportë dhe ruajtja në LocalStorage
document.addEventListener("DOMContentLoaded", function () {
    let cartItemsContainer = document.querySelector("#cart-items"); 
    let cartItems = []; // Lista e artikujve në shportë

    // Funksioni për të shtuar artikuj në karrocë
    function addToCart(product) {
        cartItems.push(product); // Shtimi i produktit në array
        const li = document.createElement("li");
        li.textContent = `${product.name} - $${product.price}`;
        cartItemsContainer.appendChild(li); // Shtimi i produktit në DOM
    }

    // Lidhja e butonëve me funksionin addToCart
    let addToCartButtons = document.querySelectorAll(".add-to-cart-btn");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function() {
            const productName = button.getAttribute("data-name");
            const productPrice = button.getAttribute("data-price");
            addToCart({ name: productName, price: productPrice });
        });
    });
});
    // 4. Funksioni për të shtuar produkte në shportë dhe për të fshirë ato

    let addToCartButtons = document.querySelectorAll(".btn.add-to-cart");

    addToCartButtons.forEach(button => {
        button.addEventListener("click", function (e) {
            const productId = e.target.getAttribute("data-product-id");
            const productName = e.target.getAttribute("data-product-name");
            const productPrice = e.target.getAttribute("data-product-price");

            const product = {
                id: productId,
                name: productName,
                price: productPrice
            };
            
            cartItems.push(product);

            localStorage.setItem("cartItems", JSON.stringify(cartItems));

            updateCart();

            cart.style.display = "block"; 
            cart.scrollIntoView({ behavior: "smooth" }); 
        });
    });

    // updateCart();



    document.querySelector("#checkout").addEventListener("click", function () {
        alert("Drejt checkout-it!");
    });

    function addToCart(productId, productName, productPrice) {
    const cartItemsContainer = document.getElementById('cart-items');
    
    const li = document.createElement('li');
    li.classList.add('cart-item');
    li.innerHTML = `
        ${productName} - $${productPrice} 
        <button class="remove-item" data-id="${productId}">Fshi</button>
    `;
    
    cartItemsContainer.appendChild(li);
    
    const removeButtons = li.querySelectorAll('.remove-item');
    removeButtons.forEach(button => {
        button.addEventListener('click', () => {
            removeItemFromCart(button.getAttribute('data-id'));
        });
    });
}

function removeItemFromCart(productId) {
    const cartItemsContainer = document.getElementById('cart-items');
    
    const items = cartItemsContainer.querySelectorAll('.cart-item');
    items.forEach(item => {
        if (item.querySelector('.remove-item').getAttribute('data-id') === productId) {
            cartItemsContainer.removeChild(item);
        }
    });
}

document.getElementById('clear-cart').addEventListener('click', () => {
    const cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = ''; 
});



function pershendetje1() {
    alert("Shijoni produktet tona!");
}


// function shfaqVerejtje() {
//     alert("Kjo është një vërejtje!");
// }
function shfaqVerejtje() {
    const warningElement = document.getElementById('warningMessage');
    warningElement.innerHTML = "Kjo është një vërejtje!";
}



$(document).ready(function() {
    // Kur kalon miu mbi tekstin
    $('.about-text p').hover(function() {
        $(this).css('color', 'green');  // Ndrysho ngjyrën e tekstit në jeshile
    }, function() {
        $(this).css('color', 'black');  // Kthe ngjyrën në të zezë kur largohet miu
    });
});


document.getElementById("product").addEventListener("change", function () {
    let selectedOption = this.options[this.selectedIndex];
    let price = selectedOption.getAttribute("data-price");
    let total = parseFloat(price).toFixed(2);

    document.getElementById("total-price").textContent = `Çmimi total: $${total}`;
});


function cleanInput(input) {
    return input.replace(/[^a-zA-Z0-9\s]/g, ""); // Hiq karakteret e veçanta
}

document.getElementById("name").addEventListener("blur", function () {
    this.value = cleanInput(this.value);
});


// Definimi i funksionit konstruktues
function Order(name, email, address, product, payment) {
    this.name = name;
    this.email = email;
    this.address = address;
    this.product = product;
    this.payment = payment;

    this.displayOrder = function () {
        return `Porosia nga ${this.name} për produktin ${this.product} me mënyrë pagese ${this.payment}.`;
    };
}

// Shembuj të instancave
let porosia1 = new Order("Arila", "arila@example.com", "Rruga 123", "Produkt 1", "PayPal");
let porosia2 = new Order("Beni", "beni@example.com", "Rruga 456", "Produkt 2", "Credit Card");

// Testimi
console.log(porosia1.displayOrder());
console.log(porosia2.displayOrder());


function manipulateNumbers() {
    let num = 12345.6789;

    console.log("Numri me eksponent:", num.toExponential(2)); // P.sh., 1.23e+4
    console.log("Numri si tekst:", num.toString());          // P.sh., "12345.6789"
    console.log("Vlera maksimale në JS:", Number.MAX_VALUE); // Shfaq vlerën maksimale
    console.log("Kontrollo për NaN:", isNaN("abc"));         // Kontrollo nëse është NaN
}

// Thirr funksionin për ta testuar
manipulateNumbers();
