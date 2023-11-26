<?php
    $rol = isset($_SESSION['ID_Rol']) ? $_SESSION['ID_Rol'] : "";
    $_SESSION['ID_Rol'] = $rol;
?>
<head>
    <link rel="stylesheet" href="../../Estilos/Paneles.css">
</head>
<div id="navbarVertical">
    <div class="caja">
        <div class="logo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="70px" height="70px">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class="regresar" onclick="ocultarNavbar()">
            <img src="../../Imagenes/Iconos/atras.png" alt="" width="58px" height="52px">
        </div>
    </div>
    <h3>INICIO</h3>
    <hr>
    <a href="../Usuario/PanelUsuario.php?ID_Rol=<?php echo $rol;?>">Página principal</a>
    <h3>ZOOLOGICOS</h3>
    <hr>
    <a href="../Zoologicos/PanelSanDiego.php?ID_Rol=<?php echo $rol;?>">Zoológico de San Diego</a>
    <a href="../Zoologicos/PanelSingapur.php?ID_Rol=<?php echo $rol;?>">Zoológico de Singapur</a>
    <a href="../Zoologicos/PanelToronto.php?ID_Rol=<?php echo $rol;?>">Zoológico de Toronto</a>
    <a href="../Zoologicos/PanelLoroParque.php?ID_Rol=<?php echo $rol;?>">Zoológico Loro Parque</a>
    <a href="../Zoologicos/PanelSchonbrunn.php?ID_Rol=<?php echo $rol;?>">Zoológico de Schonbrunn</a>
    <a href="../Zoologicos/PanelLondres.php?ID_Rol=<?php echo $rol;?>">Zoológico de Londres</a>
    <a href="../Zoologicos/PanelBerlin.php?ID_Rol=<?php echo $rol;?>">Zoológico de Berlín</a>
    <a href="../Zoologicos/PanelBronx.php?ID_Rol=<?php echo $rol;?>">Zoológico del Bronx</a>
    <a href="../Zoologicos/PanelChapultepec.php?ID_Rol=<?php echo $rol;?>">Zoológico de Chapultepec</a>
    <h3>ACUARIOS</h3>
    <hr>
    <a href="../Zoologicos/PanelTwoOceans.php?ID_Rol=<?php echo $rol;?>">Acuario Two Oceans</a>
    <div class="btn_cerrar">
        <a href="../../Index/PaginaPrincipal.php">
            <img src="../../Imagenes/Iconos/cerrar-sesion.png" alt="" width="32px" height="32px">
            Cerrar Sesion
        </a>
    </div>
</div>
