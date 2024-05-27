document.getElementById("menu-toggle").addEventListener("click", function() {
    document.getElementById("menu").classList.toggle("active");
});

// Cierra el menú cuando se hace clic en un enlace dentro del menú
document.querySelectorAll("#menu ul li a").forEach(function(link) {
    link.addEventListener("click", function() {
        document.getElementById("menu").classList.remove("active");
    });
});

// Cierra el menú cuando se hace clic en cualquier parte del contenido de la página
document.getElementById("contenido").addEventListener("click", function() {
    document.getElementById("menu").classList.remove("active");
});
