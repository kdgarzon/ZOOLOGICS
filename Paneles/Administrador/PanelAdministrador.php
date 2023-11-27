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

    $rol = (isset($_GET['ID_Rol'])?$_GET['ID_Rol']:"");
    $_SESSION['ID_Rol'] = $rol;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/estilos.css">
    <link rel="stylesheet" href="../../Estilos/General.css">
    <title>Inicio</title>
</head>
<body>
    <?php include '../../config/header.php';?>
    <h1 class="tituloInicial">SISTEMA DE GESTIÓN DE ZOOLÓGICOS</h1>
    <hr class="linea-encabezado">
    <div class="contenido">
        <div class="tarjeta">
            <img src="../../Imagenes/San Diego/Iconos PaAdm/usuario.png" alt="Usuario" width="156px" height="128px">
            <p class="texto_tarjeta">Acceder al informe integral que detalla la disponibilidad de
                usuarios en su totalidad.
            </p>
        </div>
        <div class="tarjeta">
            <img src="../../Imagenes/San Diego/Iconos PaAdm/Animales.png" alt="Animales" width="156px" height="128px">
            <p class="texto_tarjeta">
                Recopilar y analizar información acerca de los animales que se encuentran bajo
                custodia en cada zoológico.
            </p>
        </div>
        <div class="tarjeta">
            <img src="../../Imagenes/San Diego/Iconos PaAdm/Informacion.png" alt="Informacion" width="156px" height="128px">
            <p class="texto_tarjeta">
                Procesar y gestionar de manera eficaz la información básica proporcionada por 
                cada entidad zoológica.
            </p>
        </div>
        <div class="tarjeta">
            <img src="../../Imagenes/San Diego/Iconos PaAdm/Especies.png" alt="Especies" width="156px" height="128px">
            <p class="texto_tarjeta">
                Administrar la base de datos concerniente a las diversas especies alojadas en 
                cada entidad zoológica.
            </p>
        </div>
        <div class="tarjeta">
            <img src="../../Imagenes/San Diego/Iconos PaAdm/zoo.png" alt="Zoologico" width="156px" height="128px">
            <p class="texto_tarjeta">
                Examinar minuciosamente los registros y datos relativos a los zoológicos inscritos.
            </p>
        </div>
        <div class="tarjeta">
            <img src="../../Imagenes/San Diego/Iconos PaAdm/Reporte.png" alt="Reporte" width="156px" height="128px">
            <p class="texto_tarjeta">
                Evaluar exhaustivamente el reporte completo que presenta la disponibilidad de 
                información en la base de datos.
            </p>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>