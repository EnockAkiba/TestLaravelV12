
document.addEventListener("DOMContentLoaded", function () {
    const preloader = document.getElementById("preloader");

    // Masquer le preloader après le chargement
    window.onload = () => {
        setTimeout(() => {
            preloader.style.opacity = "0";
            preloader.style.visibility = "hidden";
        }, 1000); // Attente d'1 seconde après le chargement
    };
});