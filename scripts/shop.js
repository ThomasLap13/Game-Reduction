// Gestion du filtre de prix
document.getElementById('price').addEventListener('input', function() {
    document.getElementById('price-value').textContent = `${this.value}€`;
});

// Gestion des filtres (Catégorie et Prix)
document.getElementById('filters-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const category = document.getElementById('category').value;
    const price = document.getElementById('price').value;

    // Filtrage des produits
    filterProducts(category, price);
});

// Fonction de filtrage des produits
function filterProducts(category, price) {
    const products = document.querySelectorAll('.product-card');
    products.forEach(product => {
        const productCategory = product.getAttribute('data-category');
        const productPrice = parseFloat(product.getAttribute('data-price'));

        if ((category === 'all' || productCategory === category) && productPrice <= price) {
            product.style.display = 'block';
        } else {
            product.style.display = 'none';
        }
    });
}

// Gestion du panier
const cart = [];

function addToCart(productName, productPrice) {
    cart.push({ name: productName, price: productPrice });
    alert(`${productName} a été ajouté au panier !`);
}

// Événements pour les boutons "Ajouter au panier"
document.querySelectorAll('.btn-add-to-cart').forEach(button => {
    button.addEventListener('click', function() {
        const productCard = this.closest('.product-card');
        const productName = productCard.querySelector('h3').textContent;
        const productPrice = parseFloat(productCard.querySelector('p').textContent.replace('Prix : ', '').replace('€', ''));

        addToCart(productName, productPrice);
    });
});
