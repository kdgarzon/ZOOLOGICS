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
    <title>Gestión de Familias</title>
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
    <h1 class="tituloInicial">GESTION DE FAMILIAS</h1>
    <hr class="linea">
    <div class = "EntradaDatos">
        <form action="GestionFamilias.php?ID_Rol=<?=$rol?>" method = "POST" name = "formulario" class = "row g-3">
            <h2 class = "tit">Información general</h2>
            <div class="col-md-4">
                <label for="txtFamilia" class="form-label">Familia:</label>
                <input type="text" class="form-control" id="txtFamilia" name="txtFamilia" placeholder="Nombre de la familia..." required>
            </div>
            <div class="col-md-2" id = "boton">
                <input type="submit" class = "btn" style = "background-color:#A6FB7E" value = "INSERTAR" id = "btnAgregar" name = "btnAgregar">
            </div>
            <div class="col-md-2" id = "boton">
                <input type="reset" class = "btn" style = "background-color:#F6DB4C" value = "RESTABLECER CAMPOS" id = "btnBorrar" name = "btnBorrar">
            </div>
        </form>
    </div>
    <div class = "informacion">
        <h2 class = "tit">Registros</h2>
        <table class = "table table-striped">
            <thead class = "table-light">
                <th>ID Familia</th>
                <th>Familia</th>
                <th>Acciones</th>
            </thead>
            <?php
                $consultar = "SELECT * FROM Familia";            
                $registros = $link->query($consultar);

                while($fila = $registros->fetch_array()){ ?>
                    <tr>
                        <td><?= $fila[0]; ?></td>
                        <td><?= $fila[1]; ?></td>
                        <td>
                            <a href="ModificarFamilia.php?ID=<?= $fila[0] ?>&ID_Rol=<?= $rol ?>" class="btn btn-warning">
                                <img src = "../../Imagenes/Iconos/editar.png" width = "20px" height = "20px">
                            </a>
                            <a href="GestionFamilias.php?ID=<?= $fila[0] ?>&ID_Rol=<?= $rol ?>" class="btn btn-danger">
                                <img src = "../../Imagenes/Iconos/eliminar.png" width = "20px" height = "20px">
                            </a>
                        </td>
                    </tr>
                <?php } ?>
        </table>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        //INSERTAR DATOS
        if(isset($_POST['btnAgregar'])){
            
            // Obtengo los datos cargados en el formulario de Gestionar Familias.
            $Familia = $_POST['txtFamilia'];

            // Verificar si la especie ya existe
            $sqlVerificar = "SELECT COUNT(*) as count FROM Familia WHERE Familia = '$Familia'";
            $resultadoVerificar = $link->query($sqlVerificar);

            $filaVerificar = $resultadoVerificar->fetch_assoc();
            $cantidad = $filaVerificar['count'];

            if ($cantidad > 0) {
                // El nombre de la familia ya existe
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'Advertencia',
                        text: 'La familia ingresada ya existe en la base de datos.',
                        width: 600,
                        padding: '2em',
                        icon: 'warning',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'GestionFamilias.php?ID_Rol=".$rol."';
                    }, 1500);
                </script>";
            }else {
                //Formulo la consulta SQL
                $sql = "INSERT INTO Familia (Familia) VALUES ('$Familia');";

                $respuesta = $link->query($sql);
                $link->close();

                if($respuesta){
                    echo "<script type='text/javascript'>
                        Swal.fire({
                            title: '¡Datos insertados correctamente!',
                            width: 600,
                            padding: '2em',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function() {
                            // Redirige o realiza otra acción después de cerrar la alerta
                            window.location.href = 'GestionFamilias.php?ID_Rol=".$rol."';
                        }, 1500);
                    </script>";
                }else{
                    echo "<script type='text/javascript'>
                        Swal.fire({
                            title: 'ERROR!!',
                            text :'Algo salió mal y los datos no pudieron ser insertados. Intente de nuevo.',
                            width: 600,
                            padding: '2em',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        setTimeout(function() {
                            // Redirige o realiza otra acción después de cerrar la alerta
                            window.location.href = 'GestionFamilias.php?ID_Rol=".$rol."';
                        }, 1800);
                    </script>";
                }
            }
        }

        //ELIMINAR DATOS
        if(isset($_GET['ID'])){
            $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");
            
            //Formulamos la sentencia SQL
            $primer_sql = "SELECT * FROM Familia WHERE ID = '".$ID_u."'";
            
            $registros = $link->query($primer_sql);
            if($respuesta = $registros->fetch_array()){
                //Formulamos la sentencia SQL
                $segundo_sql = "DELETE FROM Familia WHERE ID = '".$ID_u."'";
                $link->query($segundo_sql);
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: '¡Datos eliminados correctamente!',
                        text: 'Los registros fueron eliminados de manera exitosa',
                        width: 600,
                        padding: '2em',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'GestionFamilias.php?ID_Rol=".$rol."';
                    }, 1800);
                </script>";
            }else{
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'ERROR!!',
                        text :'Los registros no fueron eliminados. Intente de nuevo.',
                        width: 600,
                        padding: '2em',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'GestionFamilias.php?ID_Rol=".$rol."';
                    }, 1800);
                </script>";
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>