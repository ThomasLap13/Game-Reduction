// Récupération des éléments
const galleryItems = document.querySelectorAll('.gallery-item img');
const lightbox = document.getElementById('lightbox');
const lightboxImage = document.getElementById('lightbox-image');
const lightboxClose = document.getElementById('lightbox-close');

// Afficher l'image en lightbox
galleryItems.forEach(item => {
    item.addEventListener('click', () => {
        lightbox.style.display = 'flex'; // Affiche la lightbox
        lightboxImage.src = item.src; // Met à jour l'image dans la lightbox
    });
});

// Fermer la lightbox
lightboxClose.addEventListener('click', () => {
    lightbox.style.display = 'none';
});

// Fermer la lightbox en cliquant en dehors de l'image
lightbox.addEventListener('click', (e) => {
    if (e.target === lightbox) {
        lightbox.style.display = 'none';
    }
});