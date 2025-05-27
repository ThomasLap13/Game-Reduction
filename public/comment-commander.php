<?php
include '../includes/header.php';
?>

<head>
    <title>Comment commander ? - Game Réduction</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <meta name="description" content="Découvrez comment passer commande sur Game Réduction via Discord ou par email. Simple, rapide et accompagné par notre équipe.">
    <meta name="keywords" content="Game Réduction, commander, achat, services numériques, Discord, email, support, assistance">
    <meta name="author" content="Game Réduction">

    <!-- Open Graph Meta Tags -->
    <meta property="og:title" content="Comment commander - Game Réduction">
    <meta property="og:description" content="Commandez facilement vos services numériques via Discord ou par email. Game Réduction vous accompagne à chaque étape.">
    <meta property="og:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png">
    <meta property="og:url" content="https://game-reduction.fr/public/comment-commander.php">
    <meta property="og:type" content="website">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Comment commander - Game Réduction">
    <meta name="twitter:description" content="Besoin d'aide pour commander ? Découvrez nos méthodes simples et rapides via Discord ou email.">
    <meta name="twitter:image" content="https://game-reduction.fr/assets/images/da/banniere-game-reduction.png">

    <!-- Favicon -->
    <link rel="icon" href="https://game-reduction.fr/assets/images/da/PP.png" type="image/png">

    <style>
        .section-wrapper {
            background: linear-gradient(to bottom right,rgba(255, 255, 255, 0.5),rgba(0, 0, 0, 0.5));
            padding: 50px 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0,0,0,0.05);
            margin-bottom: 40px;
        }

        .section-wrapper h2 {
            margin-bottom: 20px;
        }

        .section-wrapper p,
        .section-wrapper ol {
            font-size: 1.1rem;
        }

        .payment-icon {
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin-bottom: 10px;
        }

        .btn-copy {
            cursor: pointer;
            color: #007bff;
            font-weight: bold;
        }

        .btn-copy:hover {
            text-decoration: underline;
        }
    </style>
</head>

<main>
    <div class="container mt-5">
        <!-- Section Discord -->
        <div class="section-wrapper text-center">
            <h2><strong>Commander via Discord</strong></h2>
            <hr class="w-25 mx-auto">
            <p>Rejoignez notre serveur pour discuter avec notre équipe, poser vos questions et finaliser votre commande en toute simplicité.</p>
            <a href="https://discord.gg/mUGhG8S6Km" target="_blank">
                <img src="../assets/images/da/discord.png" class="img-fluid rounded shadow my-3"  alt="Serveur Discord">
            </a>
            <p>Une fois sur notre serveur, rendez-vous dans le salon <strong>"🎫・ticket"</strong> pour créer un ticket et nous indiquer les produits que vous souhaitez acheter.<br>Notre équipe est disponible pour vous assister à chaque étape.</p>
            
            <br><br><br><br>

            <h2><strong>Commander par Email</strong></h2>
            <hr class="w-25 mx-auto">
            <p>Envoyez-nous un message avec les références des produits souhaités, et nous vous répondrons rapidement pour vous guider dans votre achat.</p>
            <ol class="text-start mx-auto" style="max-width: 600px;">
                <li>Ouvrez votre messagerie (Gmail, Outlook, etc.).</li>
                <li>Rédigez un email en précisant votre demande ou votre commande.</li>
                <li>Envoyez-le à : <span class="btn-copy" onclick="copyEmail()">yt.game-reduction@gmail.com</span></li>
            </ol>
            <p>Nous nous engageons à vous répondre dans les plus brefs délais.</p>
            <a href="mailto:yt.game-reduction@gmail.com" class="text-decoration-none">
                <i class="fas fa-envelope contact-icon" style="font-size: 2rem;"></i>
                <p>Email</p>
            </a>
        </div>
            
        <!-- Section Paiements -->
        <div class="section-wrapper text-center">
            <h2><strong>Moyens de Paiement</strong></h2>
            <hr class="w-25 mx-auto">
            <div class="row justify-content-center">
                <div class="col-6 col-md-3 mb-4">
                    <img src="../assets/images/da/revolut.jpg" class="payment-icon" alt="Revolut">
                    <h5>Revolut</h5>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="../assets/images/da/paypal.jpg" class="payment-icon" alt="PayPal">
                    <h5>PayPal</h5>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="../assets/images/da/paysafecard.png" class="payment-icon" alt="Paysafecard">
                    <h5>Paysafecard</h5>
                </div>
                <div class="col-6 col-md-3 mb-4">
                    <img src="../assets/images/da/cb.jpg" class="payment-icon" alt="CB">
                    <h5>CB / Apple Pay</h5>
                </div>
            </div>
        </div>
    </div>
</main>

<script>
    function copyEmail() {
        navigator.clipboard.writeText("yt.game-reduction@gmail.com");
        alert("Adresse email copiée !");
    }
</script>

<?php
include '../includes/footer.php';
?>
