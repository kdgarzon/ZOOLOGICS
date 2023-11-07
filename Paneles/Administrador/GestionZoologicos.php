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
    <?php include '../../config/header.php';?>
    <h1 class="tituloInicial">GESTIÓN DE ZOOLÓGICOS</h1>
    <hr class="linea">
    <div class = "EntradaDatos">
        <form action="GestionZoologicos.php" method = "POST" name = "formulario" class = "row g-3">
            <h2 class = "tit">Información general</h2>
            <div class="col-md-4">
                <label for="txtZoo" class="form-label">Nombre del zoológico:</label>
                <input type="text" class="form-control" id="txtZoo" name="txtZoo" placeholder="Nombre del zoológico..." required>
            </div>
            <?php
                $sqlPaises = "SELECT ID, Pais FROM Pais";
                $paises = $link->query($sqlPaises);
            ?>
            <div class="col-md-4"><!--Lista desplegable-->
                <label for="listaPais" class="form-label">País: </label>
                <select id="listaPais" name="listaPais" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_pais = $paises->fetch_assoc()){ ?>
                        <option value="<?php echo $row_pais['ID'] ?>"><?= $row_pais['Pais']?></option>
                    <?php    } ?>
                </select>
            </div>
            <?php
                $sqlCiudades = "SELECT ID, Ciudad FROM Ciudad";
                $Ciudades = $link->query($sqlCiudades);
            ?>
            <div class="col-md-4"><!--Lista desplegable-->
                <label for="listaCiudad" class="form-label">Ciudad:</label>
                <select id="listaCiudad" name="listaCiudad" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_ciudad = $Ciudades->fetch_assoc()){ ?>
                        <option value="<?php echo $row_ciudad['ID'] ?>"><?= $row_ciudad['Ciudad']?></option>
                    <?php    } ?>
                </select>
            </div>
            <div class="col-md-4">
                <label for="txtTamanio" class="form-label">Tamaño en m2 (metros cuadrados): </label>
                <input type="number" class="form-control" placeholder="Tamaño del zoo..." id="txtTamanio" name="txtTamanio" required>
            </div>
            <div class="col-md-4">
                <label for="txtPresupuesto" class="form-label">Presupuesto anual (dólares): </label>
                <input type="number" class="form-control" placeholder="Presupuesto anual..." id="txtPresupuesto" name="txtPresupuesto" required>
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
                <th>ID Zoo</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Tamaño m2</th>
                <th>Presupuesto anual (dólares)</th>
                <th>Acciones</th>
            </thead>
            <?php
                $consultar = "SELECT zoo.ID, zoo.Nombre, c.Ciudad, p.Pais, zoo.Tamanio, zoo.Presupuesto_anual
                    FROM Zoologico zoo
                    JOIN Ciudad c ON zoo.ID_Ciudad = c.ID
                    JOIN Pais p ON zoo.ID_Pais = p.ID
                    ORDER BY zoo.ID ASC";
                $registros = $link->query($consultar);

                while($fila = $registros->fetch_array()){ ?>
                    <tr>
                        <td><?= $fila[0]; ?></td>
                        <td><?= $fila[1]; ?></td>
                        <td><?= $fila[2]; ?></td>
                        <td><?= $fila[3]; ?></td>
                        <td><?= number_format($fila[4]); ?></td>
                        <td><?= number_format($fila[5]); ?></td>
                        <td>
                            <a href="ModificarZoo.php?ID=<?= $fila[0] ?>" class="btn btn-warning" style = "margin-right:7px;">
                                <img src = "../../Imagenes/Iconos/editar.png" width = "20px" height = "20px">
                            </a>
                            <a href="GestionZoologicos.php?ID=<?= $fila[0] ?>" class="btn btn-danger">
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
            
            // Obtengo los datos cargados en el formulario de Gestionar Zoológicos.
            $Zoo = $_POST['txtZoo'];
            $Pais = $_POST['listaPais'];
            $Ciudad = $_POST['listaCiudad'];
            $Tam = $_POST['txtTamanio'];
            $Dinero = $_POST['txtPresupuesto'];

            //Formulo la consulta SQL
            $sql = "INSERT INTO Zoologico (Nombre, ID_Ciudad, ID_Pais, Tamanio, Presupuesto_anual) 
                VALUES ('$Zoo', '$Ciudad', '$Pais', '$Tam', '$Dinero');";

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
                        window.location.href = 'GestionZoologicos.php';
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
                        window.location.href = 'GestionZoologicos.php';
                    }, 1800);
                </script>";
            }
        }

        //ELIMINAR DATOS
        if(isset($_GET['ID'])){
            $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");
            
            //Formulamos la sentencia SQL
            $primer_sql = "SELECT * FROM Zoologico WHERE ID = '".$ID_u."'";
            
            $registros = $link->query($primer_sql);
            if($respuesta = $registros->fetch_array()){
                //Formulamos la sentencia SQL
                $segundo_sql = "DELETE FROM Zoologico WHERE ID = '".$ID_u."'";
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
                        window.location.href = 'GestionZoologicos.php';
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
                        window.location.href = 'GestionZoologicos.php';
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