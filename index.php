<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/avis.css">
    <link rel="stylesheet" href="assets/css/tableau.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@450&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/da/PP.png" type="image/x-icon">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Game Réduction - Économisez jusqu'à 70% sur vos services préférés">
    <meta property="og:description" content="Game Réduction vous aide à économiser sur vos achats numériques. Profitez de réductions exceptionnelles sur vos logiciels, jeux et abonnements préférés.">
    <meta property="og:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png"> <!-- Bannière -->
    <meta property="og:url" content="https://game-reduction.fr/">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Game Réduction - Économisez jusqu'à 70% sur vos services préférés">
    <meta name="twitter:description" content="Game Réduction est votre allié pour économiser sur vos achats numériques. Offres exclusives, assistance rapide et expérience conviviale.">
    <meta name="twitter:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png"> <!-- Bannière -->

    <!-- Logo (à utiliser dans le header ou favicon) -->
    <link rel="icon" href="https://game-reduction.fr/assets/images/da/PP.png" type="image/png">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container">
                <a class="navbar-brand" href="public/index.php">
                    <img src="assets/images/da/PP.png" alt="Logo Game Réduction" height="50" loading="lazy">
                </a>            
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="public/index.php">Accueil</a></li>
                        <li class="nav-item"><a class="nav-link" href="public/a-propos.php">À propos</a></li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">Shopping</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="shopping/jeux-video.php">Jeux Vidéo</a></li>
                                <li><a class="dropdown-item" href="shopping/streaming.php">Streaming</a></li>
                                <li><a class="dropdown-item" href="shopping/microsoft.php">Microsoft</a></li>
                                <li><a class="dropdown-item" href="shopping/discord.php">Discord</a></li>
                                <li><a class="dropdown-item" href="shopping/logiciels.php">Logiciels</a></li>
                            </ul>
                        </li>
                        <li class="nav-item"><a class="nav-link" href="public/comment-commander.php">Comment commander ?</a></li>
                        <li class="nav-item"><a class="nav-link" href="public/contact.php">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
<head>
    <title>Accueil - Game Réduction</title>
</head>

<main>
    <div class="welcome-screen" id="welcomeScreen">
        <div>
            <h1 class="display-4">Bienvenue sur Game Réduction</h1>
            <p class="lead">Économisez jusqu'à <span style="color: #36ae1b;">70%</span> sur vos services préférés</p>
            <button class="btn-custom mt-3" onclick="hideWelcome()">En savoir plus</button>
        </div>
    </div>
    <div class="container mt-5 hidden" id="hidden">
        <div style="min-height: 150px;"></div>
    </div>
    
    <div class="container mt-5 hidden" id="a-propos">
        <h2 class="text-center">À propos de nous</h2>
        <p class="text-center">Game Réduction est une initiative visant à vous aider à économiser sur vos achats numériques.</p>
        <p class="text-center">Notre objectif principal est de vous accompagner dans vos achats en ligne afin de vous faire économiser un maximum d'argent. Nous souhaitons offrir une expérience conviviale et accessible à tous, en mettant l’accent sur la qualité et la proximité.</p>
    </div>    

    <div style="min-height: 200px;"></div>
    
    <div class="container mt-5" id="offres">
    <h2 class="text-center">Nos Offres</h2>
    <hr>
    <div class="row justify-content-center text-center">
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/da/Jeux.DA.jpg" class="card-img-top" alt="Jeux Vidéo">
                <div class="card-body">
                    <h5 class="card-title">Jeux Vidéo</h5>
                    <p class="card-text">Profitez des meilleurs prix sur vos jeux préférés.</p>
                    <a href="shopping/jeux-video.php" class="btn btn-custom">Découvrir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/da/Discord.DA.jpg" class="card-img-top" alt="Discord">
                <div class="card-body">
                    <h5 class="card-title">Discord</h5>
                    <p class="card-text">Bénéficiez d'offres spéciales sur les produits Discord.</p>
                    <a href="shopping/discord.php" class="btn btn-custom">Découvrir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/da/Streaming.DA.jpg" class="card-img-top" alt="Streaming">
                <div class="card-body">
                    <h5 class="card-title">Streaming</h5>
                    <p class="card-text">Accédez à vos plateformes favorites à prix réduit.</p>
                    <a href="shopping/streaming.php" class="btn btn-custom">Découvrir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/da/Microsoft.DA-NEW.jpg" class="card-img-top" alt="Microsoft">
                <div class="card-body">
                    <h5 class="card-title">Microsoft</h5>
                    <p class="card-text">Bénéficiez d'offres spéciales sur les produits Microsoft.</p>
                    <a href="shopping/microsoft.php" class="btn btn-custom">Découvrir</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="assets/images/da/Logiciels.DA-NEW.jpg" class="card-img-top" alt="Logiciels">
                <div class="card-body">
                    <h5 class="card-title">Logiciels</h5>
                    <p class="card-text">Bénéficiez d'offres spéciales sur des Logiciels, type ChatGPT ou d'autre abonnement...</p>
                    <a href="shopping/logiciels.php" class="btn btn-custom">Découvrir</a>
                </div>
            </div>
        </div>
    </div>

    <div style="min-height: 200px;"></div>
    
    <div class="container mt-5 hidden" id="Avis">
        <h2 class="text-center">Ce que disent nos clients</h2>
        <p class="text-center">Découvrez les retours d'expérience de notre communauté satisfaite</p>
        <hr>
    
        <div class="row justify-content-center">
            <!-- Témoignage 1 -->
            <div class="col-md-6">
                <div class="card bg-dark text-white p-4 shadow">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/user.jpg" alt="SoloChained" class="rounded-circle me-3" width="50">
                        <h4 class="mb-0">SoloChained</h4>
                    </div>
                    <div class="stars text-warning mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i> <!-- Étoile vide -->
                    </div>
                    <p>Achat de 2 abonnements Premium sur YouTube ! <strong>Efficace et pour 1.20€ au lieu de 8€ !!!</strong> N'hésitez pas, foncez, c'est mon 5ᵉ achat et comme d'hab, c'est réel ✅</p>
                </div>
            </div>
        
            <!-- Témoignage 2 -->
            <div class="col-md-6">
                <div class="card bg-dark text-white p-4 shadow">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/user.jpg" alt="JujuKing" class="rounded-circle me-3" width="50">
                        <h4 class="mb-0">JujuKing</h4>
                    </div>
                    <div class="stars text-warning mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Merci beaucoup, 3.88€ le nitro, c'est juste incroyable 🕺. Il s'est connecté au compte puis s'est déconnecté sans problème. Encore merci Game Réduction !</p>
                </div>
            </div>
        
            <!-- Témoignage 3 -->
            <div class="col-md-6">
                <br>
                <div class="card bg-dark text-white p-4 shadow">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/user.jpg" alt="Junshi" class="rounded-circle me-3" width="50">
                        <h4 class="mb-0">Junshi</h4>
                    </div>
                    <div class="stars text-warning mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>J'ai acheté un Spotify Premium et tout s'est bien passé, je ne regrette pas.</p>
                </div>
            </div>
            <!-- Témoignage 4 -->
            <div class="col-md-6">
                <br>
                <div class="card bg-dark text-white p-4 shadow">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/user.jpg" alt="Kystuu" class="rounded-circle me-3" width="50">
                        <h4 class="mb-0">Kystuu</h4>
                    </div>
                    <div class="stars text-warning mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Ca fonctionne parfaitement ! Ma clef Windows 11 Pro commandé fonctionne.</p>
                </div>
            </div>
            <!-- Témoignage 5 -->
            <div class="col-md-6">
                <br>
                <div class="card bg-dark text-white p-4 shadow">
                    <div class="d-flex align-items-center">
                        <img src="assets/images/user.jpg" alt="Art700" class="rounded-circle me-3" width="50">
                        <h4 class="mb-0">Art700</h4>
                    </div>
                    <div class="stars text-warning mb-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p>Mon 2eme achat chez GameReduction 🥳! Simple et facile pour commandé un nitro 1 mois pour 4€ seulement un système ultra sécurisé avec le QR code de discord pour pas connaitre nos email et Mpd 👍. Foncez Prendre les meilleurs offre (mais vraiment) 💎. Merci Gamereduction</p>
                </div>
            </div>
        </div>            
    </div>
</main>

<div style="min-height: 200px;"></div>

    <footer>
        <div class="footer-container">
            <div class="footer-section about">
                <h4><span style="font-weight: bold;">Game</span><span style="color: #36ae1b;">Réduction</span></h4>
                <p>La meilleure plateforme pour économiser sur vos jeux vidéo et abonnements numériques.</p>
                <p>Game Réduction n'est ni affilié, ni partenaire des entreprises et marques mentionnées sur ce site.</p>
                <p>Les noms, logos et produits cités restent la propriété exclusive de leurs détenteurs respectifs.</p>
            </div>
    
            <div class="footer-section">
                <h4>Navigation</h4>
                <ul class="footer-links">
                    <a href="https://game-reduction.fr" class="footer-link">Accueil</a><br>
                    <a href="a-propos.php" class="footer-link">À propos</a><br>
                    <a href="shopping/jeux-video.php" class="footer-link">Jeux vidéo</a><br>
                    <a href="shopping/streaming.php" class="footer-link">Streaming</a><br>
                    <a href="shopping/microsoft.php" class="footer-link">Microsoft</a><br>
                    <a href="shopping/discord.php" class="footer-link">Discord</a><br>
                    <a href="shopping/logiciels.php" class="footer-link">Logiciels</a><br>
                    <a href="public/comment-commander.php" class="footer-link">Comment commander ?</a><br>
                    <a href="public/contact.php" class="footer-link">Contact</a><br>
                </ul>
            </div>
    
            <div class="footer-section">
                <h4>Informations</h4>
                <ul class="footer-links">
                    <a href="public/politique-de-confidentialite.php" class="footer-link">Politique de confidentialité</a><br>
                    <a href="public/mentions-legales.php" class="footer-link">Mentions légales</a>
                </ul>
            </div>
    
            <div class="footer-section">
                <h4>Réseaux sociaux</h4>
                <div class="social-icons">
                    <a href="https://x.com/GameReduction" target="_blank" class="me-3">
                        <i class="bi bi-twitter-x" style="font-size: 1.5rem; color: #36ae1b;"></i>
                    </a>
                    <a href="https://discord.gg/mUGhG8S6Km" target="_blank" class="me-3">
                        <i class="bi bi-discord" style="font-size: 1.5rem; color: #36ae1b;"></i>
                    </a>
                    <a href="https://www.youtube.com/@GameReduction" target="_blank">
                        <i class="bi bi-youtube" style="font-size: 1.5rem; color: #36ae1b;"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 Game Réduction. Tous droits réservés.
        </div>
    </footer>
    
    <script src="assets/js/script.js"></script>
    <script src="assets/js/scroll.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>