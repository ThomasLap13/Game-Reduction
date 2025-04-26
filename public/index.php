<?php
include '../includes/header.php';
?>
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
    
    <div class="container mt-5 hidden" id="offres">
        <h2 class="text-center">Nos Offres</h2>
        <hr>
        <div class="row text-center">
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/Jeux.DA.jpg" class="card-img-top" alt="Jeux Vidéo">
                    <div class="card-body">
                        <h5 class="card-title">Jeux Vidéo</h5>
                        <p class="card-text">Profitez des meilleurs prix sur vos jeux préférés.</p>
                        <a href="../shopping/jeux-video.php" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/Discord.DA.jpg" class="card-img-top" alt="Microsoft">
                    <div class="card-body">
                        <h5 class="card-title">Discord</h5>
                        <p class="card-text">Bénéficiez d'offres spéciales sur les produits Discord.</p>
                        <a href="../shopping/discord.php" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/Streaming.DA.jpg" class="card-img-top" alt="Streaming">
                    <div class="card-body">
                        <h5 class="card-title">Streaming</h5>
                        <p class="card-text">Accédez à vos plateformes favorites à prix réduit.</p>
                        <a href="../shopping/streaming.php" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/Microsoft.DA.jpg" class="card-img-top" alt="Microsoft">
                    <div class="card-body">
                        <h5 class="card-title">Microsoft</h5>
                        <p class="card-text">Bénéficiez d'offres spéciales sur les produits Microsoft.</p>
                        <a href="../shopping/microsoft.php" class="btn btn-custom">Découvrir</a>
                    </div>
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
                        <img src="../assets/images/user.jpg" alt="SoloChained" class="rounded-circle me-3" width="50">
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
                        <img src="../assets/images/user.jpg" alt="JujuKing" class="rounded-circle me-3" width="50">
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
                        <img src="../assets/images/user.jpg" alt="Junshi" class="rounded-circle me-3" width="50">
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
                        <img src="../assets/images/user.jpg" alt="Kystuu" class="rounded-circle me-3" width="50">
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
                        <img src="../assets/images/user.jpg" alt="Art700" class="rounded-circle me-3" width="50">
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

<script src="../assets/js/scroll.js"></script>
<?php
include '../includes/footer.php';
?>