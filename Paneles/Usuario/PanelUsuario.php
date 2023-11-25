<?php
    session_start();

    if(!isset($_SESSION['txtUser'])){
        echo '<script>
                alert("Por favor debes iniciar sesión");
                window.location = "../../Login/login.php";
            </script>';
        header('location: ../../Login/login.php');
        session_destroy();
        die();
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/Paneles.css">
    <title>Inicio</title>
</head>
<body class="body_Usuario">
    
    <div class="panel_usuario">
        <img src="../../Imagenes/Panel principal usuario/pavo real.jpg" alt="" class="fondo_paneles">
        <div id="NavegacionContainer" onclick="toggleNavbar()">
            <img src="../../Imagenes/Iconos/TresLineasBlancas.png" alt="" class="tresLineas">
        </div>
        <div class="bienvenida">
            <h1 class="usu">BIENVENIDO A ZOOLOGICS</h1>
            <hr>
        </div>
    </div>
    <?php include('../../config/headerUsuario.php'); ?>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>