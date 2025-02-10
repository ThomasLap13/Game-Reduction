function copyEmail() {
    const email = "yt.gamereduction@gmail.com";
    navigator.clipboard.writeText(email).then(() => {
        alert("Email copié !");
    }).catch(err => {
        console.error("Erreur lors de la copie : ", err);
    });
}