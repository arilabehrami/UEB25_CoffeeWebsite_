let search=document.querySelector('.search-box');


document.querySelector('#search-icon').onclick = () => {
    search.classList.toggle('active');
    cart.classList.remove('active');
    user.classList.remove('active');
}


let cart=document.querySelector('.cart');

document.querySelector('#cart-icon').onclick = () => {
    cart.classList.toggle('active');
    search.classList.remove('active');
    user.classList.remove('active');
}

let user=document.querySelector('.user');


document.querySelector('#user-icon').onclick = () => {
    user.classList.toggle('active');
    search.classList.remove('active');
    cart.classList.remove('active');
}


document.getElementById('checkout').addEventListener('click', function() {
    // Merrni të dhënat nga formulari
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    var product = document.getElementById('product').value;
    var payment = document.getElementById('payment').value;
    var total = document.getElementById('total').textContent;

    // Dërgoni këto të dhëna në elementët përmbledhës
    document.getElementById('summary-name').textContent = "Emri: " + name;
    document.getElementById('summary-email').textContent = "Email: " + email;
    document.getElementById('summary-address').textContent = "Adresa: " + address;
    document.getElementById('summary-product').textContent = "Produkt: " + product;
    document.getElementById('summary-payment').textContent = "Pagesa: " + payment;
    document.getElementById('summary-total').textContent = "Totali: " + total;

    // Shfaqni seksionin e përmbledhjes
    document.getElementById('order-summary').style.display = 'block';
});


