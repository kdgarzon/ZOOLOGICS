<?php
    $rol = (isset($_GET['ID_Rol'])?$_GET['ID_Rol']:"");
    $_SESSION['ID_Rol'] = $rol;
?>
<header>
    <nav class="navbar navbar-expand-lg" style = "background-color:#4F4F4F;">
        <div class="container-fluid">
            <a class="navbar-brand d-flex" href="../ZooCRUD/Inicio.php?ID_Rol=<?php echo $rol;?>">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="../ZooCRUD/Inicio.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <?php
                            if($rol == 1){?>
                                <a class="nav-link" href="../Zoologicos/PanelSanDiego.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 2){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelSingapur.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 3){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelToronto.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 4){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelLoroParque.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 5){?>
                                <a class="nav-link" href="../Zoologicos/PanelSchonbrunn.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 6){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelLondres.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 7){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelBerlin.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 8){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelBronx.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 9){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelChapultepec.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                            if($rol == 10){ ?>
                                <a class="nav-link" href="../Zoologicos/PanelTwoOceans.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Informacion</a>
                                <?php 
                            }else
                        ?>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../ZooCRUD/InformacionZoo.php?ID_Rol=<?php echo $rol;?>" style = "color:#FFF" id = "item">Zoológico</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style = "color:#FFF" id = "item">
                            Animales
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Administrador/GestionAnimales.php?ID_Rol=<?php echo $rol;?>">Gestión de animales</a></li>
                            <li><a class="dropdown-item" href="../Administrador/GestionFamilias.php?ID_Rol=<?php echo $rol;?>">Gestión de familias</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown" aria-expanded="false" style = "color:#FFF" id = "item">
                            Especies
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../Administrador/GestionEspecies.php?ID_Rol=<?php echo $rol;?>">Gestión de especies</a></li>
                            <li><a class="dropdown-item" href="../Administrador/AñadirEspecies.php?ID_Rol=<?php echo $rol;?>">Agregar especies</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="" style = "color:#FFF" id = "item">Informes</a>
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