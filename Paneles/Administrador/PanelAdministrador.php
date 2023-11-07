<?php
    session_start();

    if(!isset($_SESSION['txtUser'])){
        echo '<script>
                alert("Por favor debes iniciar sesión");
                window.location = "../../Login/Login.html";
            </script>';
        header('location: ../../Login/Login.html');
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
    <link rel="stylesheet" href="../../Estilos/estilos.css">
    <link rel="stylesheet" href="../../Estilos/General.css">
    <title>Inicio</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" style = "background-color:#33AE47">
            <div class="container-fluid">
                <a class="navbar-brand d-flex" href="PanelAdministrador.php">
                    <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                    <h1 class="titulo_logotipo">Zoologics</h1>
                </a>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="PanelAdministrador.php" style = "color:#FFF" id = "item">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Informacion.php" style = "color:#FFF" id = "item">Información</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="GestionUsuarios.php" style = "color:#FFF" id = "item">Usuarios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="GestionZoologicos.php" style = "color:#FFF" id = "item">Zoológicos</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style = "color:#FFF" id = "item">
                                Especies
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="GestionEspecies.php">Gestión de especies</a></li>
                                <li><a class="dropdown-item" href="AñadirEspecies.php">Agregar especies</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style = "color:#FFF" id = "item">
                                Animales
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="GestionAnimales.php">Gestión de animales</a></li>
                                <li><a class="dropdown-item" href="GestionFamilias.php">Gestión de familias</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="float-sm-end" role="cerrarSesion" method="POST" action="../../config/CerrarSesion.php">
                        <button class="navbar-brand d-flex btn" type="submit" id = "boton" style = "background-color:#ECD172">
                            <img src="../../Imagenes/Iconos/cerrar-sesion.png" alt="Logo" width="35px" height="35px" class="d-inline-block align-text-top">
                            <div class="vr" style = "color:#FFF; margin-left: 1px;"></div>
                            <div class="vr" style = "color:#FFF; margin-right: 10px; "></div>
                            <h6 class="ultimo">Cerrar Sesión</h6> 
                        </button>
                    </form>
                </div>
            </div>
        </nav>
    </header>
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