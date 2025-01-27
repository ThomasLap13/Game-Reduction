// Gestion des accordéons
const headers = document.querySelectorAll(".accordion-header");
headers.forEach(header => {
    header.addEventListener("click", function () {
        this.classList.toggle("active");
        const content = this.nextElementSibling;
        if (content.style.maxHeight) {
            content.style.maxHeight = null;
            this.querySelector("i").classList.remove("fa-angle-down");
            this.querySelector("i").classList.add("fa-angle-right");
        } else {
            content.style.maxHeight = content.scrollHeight + "px";
            this.querySelector("i").classList.remove("fa-angle-right");
            this.querySelector("i").classList.add("fa-angle-down");
        }
    });
});

function initializeCarousel(carouselClass) {
  let currentIndex = 0;
  const images = document.querySelectorAll(`.${carouselClass}-carousel-image`);
  const totalImages = images.length;
  const fadeOverlay = document.querySelector(`.${carouselClass}-fade-overlay`);
  let interval;
  let isPaused = false;
  let isTransitioning = false; // État pour éviter des clics pendant une transition

  function showImage(index) {
    if (isTransitioning) return; // Empêche une nouvelle transition si une est déjà en cours
    isTransitioning = true;

    const currentImage = images[currentIndex];
    const nextImage = images[index];

    fadeOverlay.style.opacity = 1; // Afficher l'overlay noir

    setTimeout(() => {
      currentImage.classList.remove('active'); // Masquer l'image actuelle
      nextImage.classList.add('active'); // Afficher la prochaine image

      setTimeout(() => {
        fadeOverlay.style.opacity = 0; // Rendre l'overlay transparent
        isTransitioning = false; // Transition terminée
      }, 300); // Assurer un fondu fluide
    }, 500); // Délai pour le fondu (500 ms)

    currentIndex = index; // Mettre à jour l'index courant
  }

  // Afficher la première image au chargement
  images[currentIndex].classList.add('active');

  function nextImage() {
    const nextIndex = (currentIndex + 1) % totalImages;
    showImage(nextIndex);
  }

  function prevImage() {
    const prevIndex = (currentIndex - 1 + totalImages) % totalImages;
    showImage(prevIndex);
  }

  function startAutoPlay() {
    if (!isPaused && !interval) {
      interval = setInterval(nextImage, 5000); // Automatisation toutes les 5 secondes
    }
  }

  function stopAutoPlay() {
    clearInterval(interval);
    interval = null;
  }

  function pauseAndResume() {
    stopAutoPlay();
    isPaused = true;

    setTimeout(() => {
      isPaused = false;
      startAutoPlay();
    }, 5000); // Pause de 5 secondes avant reprise
  }

  startAutoPlay();

  // Ajouter les gestionnaires d'événements pour les boutons
  const nextBtn = document.querySelector(`.${carouselClass}-next-btn`);
  const prevBtn = document.querySelector(`.${carouselClass}-prev-btn`);

  if (nextBtn) {
    nextBtn.addEventListener('click', () => {
      if (!isTransitioning) {
        pauseAndResume();
        nextImage();
      }
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener('click', () => {
      if (!isTransitioning) {
        pauseAndResume();
        prevImage();
      }
    });
  }

  // Arrêter l'autoplay si la souris passe sur le carousel
  const carouselContainer = document.querySelector(`.${carouselClass}-carousel`);
  if (carouselContainer) {
    carouselContainer.addEventListener('mouseenter', stopAutoPlay);
    carouselContainer.addEventListener('mouseleave', startAutoPlay);
  }
}


// Détection et initialisation automatique des carrousels
document.addEventListener('DOMContentLoaded', () => {
  const carouselClasses = new Set();

  // Recherche toutes les classes correspondant au modèle "-carousel-image"
  document.querySelectorAll('[class*="-carousel-image"]').forEach(image => {
    const match = image.className.match(/(\w+)-carousel-image/);
    if (match) {
      carouselClasses.add(match[1]);
    }
  });

  // Initialiser chaque carrousel détecté
  carouselClasses.forEach(carouselClass => {
    initializeCarousel(carouselClass);
  });
});

let lastScrollTop = 0;
const header = document.querySelector("header");

window.addEventListener("scroll", () => {
    const scrollTop = window.scrollY;

    if (scrollTop > lastScrollTop) {
        // Scroll vers le bas, masque le header
        header.classList.add("hidden");
    } else {
        // Scroll vers le haut, affiche le header
        header.classList.remove("hidden");
    }

    lastScrollTop = scrollTop;
});