// Validation du formulaire de connexion
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    if (email && password) {
        alert('Connexion réussie !');
        // Ici, vous pouvez ajouter une logique pour envoyer ces données au backend pour la vérification.
    } else {
        alert('Veuillez remplir tous les champs.');
    }
});

// Validation du formulaire d'inscription
document.getElementById('register-form').addEventListener('submit', function(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirm-password').value;

    if (password !== confirmPassword) {
        alert('Les mots de passe ne correspondent pas.');
    } else if (email && password && confirmPassword) {
        alert('Inscription réussie !');
        // Ici aussi, vous pouvez envoyer les données au backend pour créer un compte.
    } else {
        alert('Veuillez remplir tous les champs.');
    }
});
