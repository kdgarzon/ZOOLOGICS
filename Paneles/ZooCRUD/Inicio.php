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
    <link rel="stylesheet" href="../../Estilos/Paneles.css">
    <link rel="stylesheet" href="../../Estilos/Principal.css">
    <title>Inicio</title>
</head>
<body class="body_Usuario">
    <header>
        <nav class="Barra_Navegacion">
            <div class="logotipo">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Tucan" width="70px" height="70px" >
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <div class="items_zoo">
                <a href="../ZooCRUD/Inicio.php?ID_Rol=<?php echo $rol;?>">Inicio</a>
                <?php
                    if($rol == 1){?>
                        <a href="../Zoologicos/PanelSanDiego.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 2){ ?>
                        <a href="../Zoologicos/PanelSingapur.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 3){ ?>
                        <a href="../Zoologicos/PanelToronto.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 4){ ?>
                        <a href="../Zoologicos/PanelLoroParque.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 5){?>
                        <a href="../Zoologicos/PanelSchonbrunn.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 6){ ?>
                        <a href="../Zoologicos/PanelLondres.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 7){ ?>
                        <a href="../Zoologicos/PanelBerlin.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 8){ ?>
                        <a href="../Zoologicos/PanelBronx.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 9){ ?>
                        <a href="../Zoologicos/PanelChapultepec.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                    if($rol == 10){ ?>
                        <a href="../Zoologicos/PanelTwoOceans.php?ID_Rol=<?php echo $rol;?>">Informacion</a>
                        <?php 
                    }else
                ?>
                <a href="../ZooCRUD/InformacionZoo.php?ID_Rol=<?php echo $rol;?>">Zoológico</a>
                <a href="../Administrador/GestionAnimales.php?ID_Rol=<?php echo $rol;?>">Animales</a>
                <a href="../Administrador/GestionFamilias.php?ID_Rol=<?php echo $rol;?>">Familias</a>
                <a href="../Administrador/GestionEspecies.php?ID_Rol=<?php echo $rol;?>">Especies</a>
                <a href="../Administrador/AñadirEspecies.php?ID_Rol=<?php echo $rol;?>">Añadir Esp</a>
                <a href="">Informes</a>
            </div>
            <div class="botones">
                <div class="btn_ingresar">
                    <img src="../../Imagenes/Iconos/cerrar-sesion.png" alt="" width="32px" height="32px">
                    <a href="../../Index/PaginaPrincipal.php">Cerrar Sesion</a>
                </div>
            </div>
        </nav>
    </header>
    <div class="panel_usuario">
        <img src="../../Imagenes/Panel principal zoologico/elefante.jpg" alt="" class="fondo_paneles">
        <div class="bienvenida" id="b">
            <hr>
            <h1 class="zoo">BIENVENIDO</h1>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous">
    </script>
</body>
</html>