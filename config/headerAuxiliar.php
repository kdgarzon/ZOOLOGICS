
<div class="cont">
    <div class="tresLineas"id="NavegacionContainer" onclick="toggleNavbar()">
        <img src="../../Imagenes/Iconos/TresLineasBlancas.png" alt="Barra desplegable" width="50px" height="50px" class="tresLineas">
    </div>
    <div class="logo">
        <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
        <h1 class="titulo_logotipo">Zoologics</h1>
    </div>
</div>
<?php include('../../config/headerUsuario.php'); ?>
<script>
    var navbar = document.getElementById("navbarVertical");

    function toggleNavbar() {
        if (navbar.style.display === "none" || navbar.style.display === "") {
            mostrarNavbar();
        } else {
            ocultarNavbar();
        }
    }

    function mostrarNavbar() {
        navbar.style.display = "block";
        setTimeout(function () {
            navbar.classList.remove("navbarHidden");
        }, 0); 
    }

    function ocultarNavbar() {
        navbar.classList.add("navbarHidden");
        setTimeout(function () {
            navbar.style.display = "none";
        }, 500); 
    }

</script>