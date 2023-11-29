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
    require('../../config/conexion.php');
    $link = conectar();

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.all.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../Estilos/estilos.css">
    <link rel="stylesheet" href="../../Estilos/Tablas.css">
    <style>
        .informacion{
            margin-left: 9%;
            margin-right:9%;
        }
    </style>
    <title>Gestión de zoológicos</title>
</head>
<body>
    <?php
        if($rol == 11){
            include '../../config/header.php';
        }
        if($rol != 11){
            include '../../config/headerZoo.php';
        }
    ?>
    <h1 class="tituloInicial">INFORMES DISPONIBLES</h1>
    <hr class="linea">
    <div class = "informacion">
        <?php
            if($rol == 11){?>
                <h2 class = "tit">Reportes de gestión general</h2>            
                <?php 
            }else
            if($rol != 11){?>
                <h2 class = "tit">Reportes del Zoológico</h2>            
                <?php 
            }
        ?>
        <table class = "table table-striped">
            <thead class = "table-light">
                <th>ID </th>
                <th>Nombre de zoológico</th>
                <th>Reporte</th>
            </thead>
            <?php
                if($rol == 11){
                    $consultar = "SELECT ID, Nombre FROM Zoologico;";
                }else
                if($rol != 11){
                    $consultar = "SELECT ID, Nombre FROM Zoologico WHERE ID = $rol;";
                }

                $registros = $link->query($consultar);

                while($fila = $registros->fetch_array()){ ?>
                    <tr>
                        <td><?= $fila[0]; ?></td>
                        <td><?= $fila[1]; ?></td>
                        <td>
                            <a href="ReporteGeneral.php?ID=<?= $fila[0] ?>&ID_Rol=<?= $rol ?>" class="btn btn-info">
                                <img src = "../../Imagenes/Iconos/descargar.png" width = "20px" height = "20px"> Descargar
                            </a>
                        </td>
                    </tr>
                <?php } 
                if (!$registros) {
                    echo "Error en la consulta SQL: " . $link->error;
                }
                ?>
        </table>
    </div>
</body>
</html>