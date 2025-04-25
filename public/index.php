<?php
include '../includes/header.php';
?>

<main>
    <div class="welcome-screen" id="welcomeScreen">
        <div>
            <h1 class="display-4">Bienvenue sur mon portefolio</h1>
            <p class="lead">Thomas Lapierre, etudiant a Saint Bénigne et alternant IT chez Micro-Mega.</p>
            <button class="btn-custom mt-3" onclick="hideWelcome()">Découvrez qui je suis</button>
        </div>
    </div>
    <div class="container mt-5 hidden" id="hidden">
        <div style="min-height: 150px;"></div>
    </div>
    
    <div class="container mt-5 hidden" id="a-propos">
        <h2 class="text-center">À propos de moi</h2>
        <p class="text-center">Bonjour, je m'appelle Thomas Lapierre, j'ai 18 ans et je vis à Besançon.<br>Actuellement, je suis étudiant en BTS Services Informatiques aux Organisations (SIO) au Lycée Saint-Bénigne à Dijon (21).</p>
        <p class="text-center">Depuis ma première, je suis en alternance en tant qu'administrateur réseau au sein de Micro-Mega, une entreprise basée à Besançon (25). Cette expérience me permet de développer des compétences techniques solides tout en appliquant les enseignements théoriques de mon cursus.</p>
    </div>
    <div style="min-height: 200px;"></div>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../assets/images/formations/saint-benigne.jpg" class="d-block w-100" alt="Image 1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Première Image</h5>
                    <p>Description de la première image.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/formations/saint-joseph.jpg" class="d-block w-100" alt="Image 2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Deuxième Image</h5>
                    <p>Description de la deuxième image.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../assets/images/formations/victor-hugo.jpg" class="d-block w-100" alt="Image 3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Troisième Image</h5>
                    <p>Description de la troisième image.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Précédent</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Suivant</span>
        </button>
    </div>
    
    <div style="min-height: 200px;"></div>
    
    <div class="container mt-5 hidden" id="offres">
        <h2 class="text-center">Au sommaire :</h2>
        <hr>
        <div class="row text-center">
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/projets.jpg" class="card-img-top" alt="Projets">
                    <div class="card-body">
                        <h5 class="card-title">Projets</h5>
                        <p class="card-text">Profitez des meilleurs prix sur vos jeux préférés.</p>
                        <a href="../public/projets.php" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/evenements.jpg" class="card-img-top" alt="evenements">
                    <div class="card-body">
                        <h5 class="card-title">Événements</h5>
                        <p class="card-text">Bénéficiez d'offres spéciales sur les produits Discord.</p>
                        <a href="Voir-plus/evenements.html" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/veilles.jpg" class="card-img-top" alt="veilles">
                    <div class="card-body">
                        <h5 class="card-title">Veille Technologique</h5>
                        <p class="card-text">Accédez à vos plateformes favorites à prix réduit.</p>
                        <a href="Voir-plus/veille.html" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 hidden">
                <div class="card">
                    <img src="../assets/images/da/contact.jpg" class="card-img-top" alt="contact">
                    <div class="card-body">
                        <h5 class="card-title">Contact</h5>
                        <p class="card-text">Bénéficiez d'offres spéciales sur les produits Microsoft.</p>
                        <a href="contact.html" class="btn btn-custom">Découvrir</a>
                    </div>
                </div>
            </div>
        </div>
    </div>    
</main>

<?php
include '../includes/footer.php';
?>