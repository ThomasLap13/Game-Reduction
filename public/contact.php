<?php
include '../includes/header.php';
?>

<head>
    <title>Contact - Game Réduction</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Contactez Game Réduction pour toute question, suggestion ou demande d'information. Nous sommes à votre écoute via email, Discord ou GitHub.">
    <meta name="keywords" content="Game Réduction, contact, support, assistance, email, Discord, GitHub, aide, service client">
    <meta name="author" content="Game Réduction">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Nous contacter - Game Réduction">
    <meta property="og:description" content="Besoin d'aide ou d'informations ? Contactez Game Réduction facilement par email, Discord ou GitHub.">
    <meta property="og:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png">
    <meta property="og:url" content="https://game-reduction.fr/public/contact.php">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Nous contacter - Game Réduction">
    <meta name="twitter:description" content="Une question ? Une suggestion ? Contactez-nous facilement via email, Discord ou GitHub.">
    <meta name="twitter:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png">

    <!-- Favicon -->
    <link rel="icon" href="https://game-reduction.fr/assets/images/da/PP.png" type="image/png">

    <style>
        .contact-wrapper {
            background: linear-gradient(to bottom right, rgba(255, 255, 255, 0.5), rgba(0, 0, 0, 0.5));
            padding: 60px 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            margin-top: 40px;
        }

        .contact-icon {
            font-size: 2.5rem;
            color: #5865F2;
            transition: transform 0.3s ease;
        }

        .contact-icon:hover {
            transform: scale(1.2);
        }

        .contact-method {
            margin: 20px 0;
        }

        .contact-method p {
            margin-top: 10px;
            font-weight: 500;
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

<main>
    <div class="container">
        <div class="contact-wrapper">
            <div class="row justify-content-center text-center">
                <div class="col-lg-10">
                    <h2><strong>Contactez-nous</strong></h2>
                    <hr class="w-25 mx-auto">
                    <p class="lead">
                        Nous sommes à votre disposition pour répondre à toutes vos questions ou pour vous fournir des informations supplémentaires.<br>
                        Que vous souhaitiez obtenir des renseignements, partager vos suggestions, ou signaler un problème, n'hésitez pas à nous contacter via l'un des moyens suivants :
                    </p>
                </div>
            </div>

            <div class="row justify-content-center align-items-center mt-4">
                <div class="col-md-5 text-center mb-4 mb-md-0">
                    <img src="../assets/images/da/PP.png" class="img-fluid rounded shadow" alt="Notre communauté" style="max-width: 300px;">
                </div>

                <div class="col-md-6">
                    <div class="row justify-content-center">
                        <div class="col-12 contact-method text-center">
                            <a href="mailto:yt.game-reduction@gmail.com" class="text-decoration-none text-white">
                                <i class="fas fa-envelope contact-icon"></i>
                                <p>Email</p>
                            </a>
                        </div>
                        <div class="col-12 contact-method text-center">
                            <a href="https://discord.gg/mUGhG8S6Km" target="_blank" class="text-decoration-none text-white">
                                <i class="fab fa-discord contact-icon"></i>
                                <p>Discord</p>
                            </a>
                        </div>
                        <div class="col-12 contact-method text-center">
                            <a href="https://github.com/ThomasLap13/New-Game-Reduction" target="_blank" class="text-decoration-none text-white">
                                <i class="fab fa-github contact-icon"></i>
                                <p>GitHub</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
    </div>
</main>

<?php
include '../includes/footer.php';
?>
