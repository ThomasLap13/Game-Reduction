// Gérer la déconnexion
document.getElementById('logout').addEventListener('click', function(event) {
    event.preventDefault();
    
    // Simuler la déconnexion en supprimant les informations de session (exemple ici)
    alert('Vous avez été déconnecté !');
    
    // Rediriger l'utilisateur vers la page de connexion après déconnexion
    window.location.href = 'login.html';
});

// Exemple d'ajout d'événements pour la modification des informations personnelles
document.querySelector('.btn-edit').addEventListener('click', function() {
    alert('Fonction de modification des informations encore à implémenter.');
});
