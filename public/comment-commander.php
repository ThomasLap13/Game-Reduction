<?php
include '../includes/header.php';
?>

<head>
    <title>À propos - Game Réduction</title>
</head>

<main>
    <div class="container hidden mt-5">
        <h2 class="text-center">Par Discord</h2><hr>
        <p class="text-center">Rejoignez notre serveur pour discuter avec notre équipe, poser vos questions et finaliser votre commande en toute simplicité.</p>
        <p class="text-center" hidden>Pour passer une commande, nous vous invitons à rejoindre notre serveur Discord en cliquant sur le lien suivant :
            <a href="https://discord.gg/mUGhG8S6Km" target="_blank">Serveur Discord</a>.
        </p>
        <div class="col-md-6-center hidden">
            <a href="https://discord.gg/mUGhG8S6Km" target="_blank">
                <img src="../assets/images/da/discord.png" class="img-fluid rounded shadow" alt="Notre communauté">
            </a>
        </div><br>        
        <p class="text-center hidden">Une fois sur notre serveur, rendez-vous dans le salon "Ticket", où vous pourrez créer un ticket afin de nous indiquer les produits que vous souhaitez acheter.</p>
        <p class="text-center hidden">Dans ce salon, notre équipe est disponible pour répondre à vos questions, vous aider à choisir les produits qui vous conviennent le mieux et finaliser votre commande. N'hésitez pas à décrire précisément ce que vous recherchez et à poser toutes vos questions. Nous sommes là pour vous assister !</p>
    </div>
    <br>
    <div class="container mt-5 hidden">
        <h2 class="text-center">Par Email</h2><hr>
        <p class="text-center">Envoyez-nous un message avec les références des produits souhaités, et nous vous répondrons rapidement pour vous guider dans votre achat. Nous sommes à votre disposition pour toute information supplémentaire. N'hésitez pas à nous contacter !</p>
        <p class="text-center">Pour nous contacter, rien de plus simple :</p>
        <ol class="text-center">
            <li>Ouvrez votre messagerie préférée (Gmail, Outlook, Yahoo, etc.).</li>
            <li>Rédigez un email en précisant votre demande ou votre commande.</li>
            <li>Envoyez-le à l'adresse suivante : <span class="btn-copy" onclick="copyEmail()">yt.game-reduction@gmail.com</span></li>
        </ol>
        <p class="text-center">Nous nous engageons à vous répondre dans les plus brefs délais afin de vous offrir la meilleure expérience possible.</p>
        <button class="btn btn-primary btn-copy" onclick="copyEmail()">Copier l'adresse email</button>
    </div>
    <br>
    <div class="container mt-5 hidden">
        <h2 class="text-center">Moyens de Paiement</h2><hr>
        <div class="row justify-content-center">
            <div class="col-auto text-center mb-4">
                <img src="../assets/images/da/revolut.jpg" class="img-fluid rounded-circle" alt="revolut">
                <h4>Revolut</h4>
            </div>
            <div class="col-auto text-center mb-4">
                <img src="../assets/images/da/paypal.jpg" class="img-fluid rounded-circle" alt="paypal">
                <h4>PayPal</h4>
            </div>
            <div class="col-auto text-center mb-4">
                <img src="../assets/images/da/paysafecard.png" class="img-fluid rounded-circle" alt="paysafecard">
                <h4>Paysafecard</h4>
            </div>
            <div class="col-auto text-center mb-4">
                <img src="../assets/images/da/cb.jpg" class="img-fluid rounded-circle" alt="cb">
                <h4>CB, Apple Pay</h4>
            </div>
        </div>        
    </div>
</main>

<?php
include '../includes/footer.php';
?>