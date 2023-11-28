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
    require('../../config/Conexion.php');
    $link = conectar();

    function obtenerNombreCiudad($idCiudad, $link) {
        $sqlCiudades = "SELECT ID, Ciudad FROM Ciudad";
        $Ciudades = $link->query($sqlCiudades);
        $Ciudades->data_seek(0);

        while ($row_ciudad = $Ciudades->fetch_assoc()) {
            if ($row_ciudad['ID'] == $idCiudad) {
                return $row_ciudad['Ciudad'];
            }
        }
        return 'Ciudad Desconocida'; 
    }

    function obtenerNombrePais($idPais, $link) {
        $sqlPaises = "SELECT ID, Pais FROM Pais";
        $paises = $link->query($sqlPaises);
        $paises->data_seek(0);

        while ($row_pais = $paises->fetch_assoc()) {
            if ($row_pais['ID'] == $idPais) {
                return $row_pais['Pais'];
            }
        }
        return 'País Desconocida'; 
    }

    $rol = (isset($_GET['ID_Rol'])?$_GET['ID_Rol']:"");
    $_SESSION['ID_Rol'] = $rol;

    $sqlSeleccionar = "SELECT * FROM Zoologico WHERE ID = $rol";
    $registros = $link->query($sqlSeleccionar);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="../../Estilos/Tablas.css">
    <link rel="stylesheet" href="../../Estilos/Paneles.css">
    <link rel="stylesheet" href="../../Estilos/PestañasZoo.css">
    <link rel="stylesheet" href="../../Estilos/estilos.css">
    <title>Datos del zoológico</title>
</head>
<body class="bodyOpcional">
    <?php include('../../config/headerZoo.php');?>
    <div class="datos">
        <div id="datosPersonales" class="col-md-6">
            <div class="encabezadoDatos">
                <h2 class="titDatos">Información general</h2>
            </div>
            <div class="contenidoDatos">
                <?php while ($fila = $registros->fetch_array()) { ?>
                    <input type="hidden" id="id" name="id" value="<?= $rol; ?>">
                    <div class="filaDatos">
                        <label for="subDatos">ID: </label>
                        <label for="RespuestaDatos"><?= $fila[0]; ?></label>
                    </div>
                    <div class="filaDatos">
                        <label for="subDatos">Nombre: </label>
                        <label for="RespuestaDatos"><?= $fila[1]; ?></label>
                    </div>
                    <div class="filaDatos">
                        <label for="subDatos" class="form-label">Ciudad: </label>
                        <label for="RespuestaDatos"><?= obtenerNombreCiudad($fila[2], $link); ?></label>
                    </div>
                    <div class="filaDatos">
                        <label for="subDatos" class="form-label">País: </label>
                        <label for="RespuestaDatos"><?= obtenerNombrePais($fila[3], $link); ?></label>
                    </div>
                    <div class="filaDatos">
                        <label for="subDatos">Tamaño en m2: </label>
                        <label for="RespuestaDatos"><?= number_format($fila[4]); ?></label>
                    </div>
                    <div class="filaDatos">
                        <label for="subDatos">Presupuesto anual: </label>
                        <label for="RespuestaDatos"><?= number_format($fila[5]); ?></label>
                    </div>
                <?php } ?>
            </div>
        </div>
        <div id="imagenDatos" class="col-md-6">
            <img src="../../Imagenes/Panel principal zoologico/datos.jpg" alt="">
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