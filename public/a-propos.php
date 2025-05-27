<?php
include '../includes/header.php';
?>

<head>
    <title>À propos - Game Réduction</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Découvrez l'histoire, la mission et les valeurs de Game Réduction. Un projet passionné dédié à l'entraide, à l'économie et à la communauté.">
    <meta name="keywords" content="Game Réduction, À propos, communauté gaming, économie numérique, entraide, services en ligne">
    <meta name="author" content="Game Réduction">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="À propos - Game Réduction">
    <meta property="og:description" content="Game Réduction est un projet passionné né de l'envie de partager, d'aider et de faire économiser. Découvrez notre histoire et notre mission.">
    <meta property="og:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png">
    <meta property="og:url" content="https://game-reduction.fr/public/a-propos.php">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="À propos - Game Réduction">
    <meta name="twitter:description" content="Un projet proche des gens, dédié à ceux qui recherchent des conseils pour économiser tout en profitant des meilleures offres.">
    <meta name="twitter:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png">

    <!-- Favicon -->
    <link rel="icon" href="https://game-reduction.fr/assets/images/da/PP.png" type="image/png">

    <style>
        .bg-texture {
            background: linear-gradient(to bottom right,rgba(255, 255, 255, 0.5),rgba(0, 0, 0, 0.5));
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            padding: 60px 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
        }

        .contact-wrapper {
            background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5));
            padding: 60px 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            margin-top: 40px;
        }

        .don-btn {
            background-color: #28a745;
            color: white;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 8px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .don-btn:hover {
            background-color: #218838;
        }
    </style>
</head>

<main class="container mt-5">
    <section class="text-center mb-5 bg-texture">
        <h2><strong>Notre histoire</strong></h2>
        <hr class="w-25 mx-auto">
        <div class="text-start mx-auto" style="max-width: 900px;">
            <p>
                Game Réduction est avant tout une initiative passionnée, nous avons créé Game Réduction le 14 mars 2024, portée par l’envie de créer une communauté d’entraide et d’économie. Nous ne sommes pas une entreprise, mais plutôt un projet proche des gens, dédié à ceux qui recherchent des conseils pertinents pour économiser tout en profitant des meilleures offres disponibles.
            </p>
            <p>
                Nous avons pour mission de vous accompagner dans vos choix d’achats en ligne, en vous proposant des services et recommandations personnalisés. Notre objectif est simple : vous permettre de faire plus avec moins, tout en conservant une expérience agréable et fiable.
            </p>
            <p>
                Ce projet est né d’une passion pour l’informatique, les technologies et l’envie de partager nos compétences. Que ce soit pour optimiser vos dépenses liées au gaming, au streaming, ou pour des abonnements spécifiques, nous mettons un point d’honneur à vous offrir des solutions adaptées à vos besoins.
            </p>
            <p>
                Nous croyons fermement que la proximité et la confiance sont essentielles. C’est pourquoi nous avons décidé de rester indépendants, sans adopter une structure commerciale classique. Ce choix nous permet de rester flexibles et de maintenir une relation authentique avec notre communauté.
            </p>
            <p>
                Chez Game Réduction, nous ne nous contentons pas de proposer des services : nous partageons également nos passions. Qu’il s’agisse de l’assemblage de PC sur mesure, de la création de vidéos dynamiques pour vos projets ou simplement d’échanger autour de jeux vidéo peu connus, notre but est de connecter des personnes partageant les mêmes centres d'intérêt.
            </p>
            <p>
                Nous espérons que notre projet saura vous apporter satisfaction et qu’ensemble, nous pourrons continuer à développer une communauté forte, centrée sur la passion, l’entraide et l’économie.
            </p>
        </div>
    </section>

    <section class="text-center mb-5 bg-texture">
        <section class="row align-items-center my-5">
            <div class="col-md-6">
                <img src="../assets/images/da/about.PNG" class="img-fluid rounded shadow" alt="Notre mission">
            </div>
            <div class="col-md-6">
                <h3><strong>Notre mission</strong></h3>
                <p>Vous accompagner dans vos choix d’achats en ligne, en vous proposant des services et recommandations personnalisés. Notre objectif est simple : vous permettre de faire plus avec moins, tout en conservant une expérience agréable et fiable.</p>
            </div>
        </section>

        <section class="row align-items-center my-5 flex-md-row-reverse">
            <div class="col-md-6">
                <img src="../assets/images/da/engagé.png" class="img-fluid rounded shadow" alt="Notre communauté">
            </div>
            <div class="col-md-6">
                <h3><strong>Une communauté engagée</strong></h3>
                <p>Notre projet repose sur la proximité et l'entraide entre passionnés du gaming et des technologies.</p>
            </div>
        </section>
    </section>

    <!-- Section Don -->
    <div class="contact-wrapper text-center">
        <h2>💚 Soutenez Game Réduction</h2>
        <hr class="w-25 mx-auto">
        <p class="lead">
            Si vous appréciez notre travail et souhaitez nous aider à faire grandir la communauté, vous pouvez nous soutenir en faisant un don.
        </p>
        <p>
            Chaque contribution, même modeste, nous permet de continuer à proposer des services gratuits, des conseils personnalisés et des contenus de qualité.
        </p>
        <a href="https://revolut.me/thomas_pro" target="_blank" class="don-btn">
            Faire un don via Revolut
        </a>
        <p class="mt-3"><small>Merci pour votre soutien 🙏</small></p>
    </div>
</main>

<?php
include '../includes/footer.php';
?>
