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

function pershendetje1() {
    alert("Shijoni produktet tona!");
}

function shfaqVerejtje() {
    const warningElement = document.getElementById('warningMessage');
    warningElement.innerHTML = "Nëse përballeni me ndonjë problem,ju lutem të kontaktoni shërbimin tonë të klientit. Faleminderit për mirëkuptimin tuaj!";
}

$(document).ready(function(){
    $('.timeline-item p').hover(function() {
        $(this).css('color','blue');
    }, function() {
        $(this).css('color','black');
    });
});

$(document).ready(function() {
    // Kur kalon miu mbi tekstin
    $('.about-text p').hover(function() {
        $(this).css('color', 'green');  // Ndrysho ngjyrën e tekstit në jeshile
    }, function() {
        $(this).css('color', 'black');  // Kthe ngjyrën në të zezë kur largohet miu
    });
});


document.addEventListener("DOMContentLoaded", function() {
    // Sigurohuni që elementi "product" ekziston
    const productElement = document.getElementById("product");
    if (productElement) {
        productElement.addEventListener("change", function () {
            // Merrni opsionin e përzgjedhur
            let selectedOption = this.options[this.selectedIndex];
            
            // Merrni çmimin nga atributi "data-price"
            let price = selectedOption.getAttribute("data-price");
            
            // Kontrolloni që çmimi të jetë i vlefshëm dhe përpunoni atë
            if (price) {
                let total = parseFloat(price).toFixed(2);
                // Sigurohuni që elementi "total-price" ekziston dhe përditësoni çmimin
                const totalPriceElement = document.getElementById("total-price");
                if (totalPriceElement) {
                    totalPriceElement.textContent = `Çmimi total: $${total}`;
                } else {
                    console.log("Elementi 'total-price' nuk u gjet!");
                }
            } else {
                console.log("Çmimi nuk u gjet!");
            }
        });
    } else {
        console.log("Elementi 'product' nuk u gjet!");
    }
});



function cleanInput(input) {
    return input.replace(/[^a-zA-Z0-9\s]/g, ""); // Hiq karakteret e veçanta
}


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
let porosia1 = new Order("Arila", "arila@hotmail.com", "Rruga 123", "Americano", "PayPal");
let porosia2 = new Order("Beni", "beni@gmail.com", "Rruga 456", "Espresso", "Credit Card");

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


// Fillon tërheqjen dhe ruan ID-në e elementit
function dragStart(event) {
    event.dataTransfer.setData("text", event.target.id);
}

// Lejon hedhjen e elementit në zonën e synuar
function allowDrop(event) {
    event.preventDefault();
}

// Vendos elementin në zonën e re
function drop(event) {
    event.preventDefault();
    const data = event.dataTransfer.getData("text");
    const draggedElement = document.getElementById(data);
    event.target.appendChild(draggedElement);
}



document.addEventListener("DOMContentLoaded", function () {
    // Inicializo datën aktuale në fushën e datës
    const currentDate = new Date();
    const formattedDate = currentDate.toISOString().split('T')[0];

    const orderDateElement = document.getElementById("order-date");
    if (orderDateElement) {
        orderDateElement.value = formattedDate;
    } else {
        console.log("Elementi me ID 'order-date' nuk u gjet!");
    }
});


