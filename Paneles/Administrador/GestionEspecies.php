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
    <title>Gestión de Especies</title>
</head>
<body>
    <?php include '../../config/header.php';?>
    <h1 class="tituloInicial">GESTION DE ESPECIES</h1>
    <hr class="linea">
    <div class = "EntradaDatos">
        <form action="GestionEspecies.php" method = "POST" name = "formulario" class = "row g-3">
            <h2 class = "tit">Información general</h2>
            <div class="col-md-6">
                <label for="txtNomVulgar" class="form-label">Nombre vulgar:</label>
                <input type="text" class="form-control" id="txtNomVulgar" name="txtNomVulgar" placeholder="Nombre vulgar del animal..." required>
            </div>
            <div class="col-md-6">
                <label for="txtNomCientifico" class="form-label">Nombre científico:</label>
                <input type="text" class="form-control" id="txtNomCientifico" name="txtNomCientifico" placeholder="Nombre científico del animal..." required>
            </div>
            <?php
                $sqlEspecies = "SELECT ID, Especie FROM Nombre_Especie";
                $Especies = $link->query($sqlEspecies);
            ?>
            <div class="col-md-4">
                <label for="listaEspecie" class="form-label">Especie: </label>
                <select name="listaEspecie" id="listaEspecie" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_esp = $Especies->fetch_assoc()){ ?>
                        <option value="<?php echo $row_esp['ID'] ?>"><?= $row_esp['Especie']?></option>
                    <?php    } ?>
                </select>
            </div>
            <?php
                $sqlFamilias = "SELECT ID, Familia FROM Familia";
                $Familias = $link->query($sqlFamilias);
            ?>
            <div class="col-md-4">
                <label for="listaFamilias" class="form-label">Familia a la que pertenece: </label>
                <select name="listaFamilias" id="listaFamilias" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_fam = $Familias->fetch_assoc()){ ?>
                        <option value="<?php echo $row_fam['ID'] ?>"><?= $row_fam['Familia']?></option>
                    <?php    } ?>
                </select>
            </div>
            <?php
                $sqlPeligro = "SELECT ID, Nivel_peligro FROM Extincion";
                $Peligros = $link->query($sqlPeligro);
            ?>
            <div class="col-md-4">
                <label for="listaPeligro" class="form-label">Nivel de peligro de extinción: </label>
                <select name="listaPeligro" id="listaPeligro" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_pel = $Peligros->fetch_assoc()){ ?>
                        <option value="<?php echo $row_pel['ID'] ?>"><?= $row_pel['Nivel_peligro']?></option>
                    <?php    } ?>
                </select>
            </div>
            <?php
                $sqlZoo = "SELECT ID, Nombre FROM Zoologico";
                $Zoo = $link->query($sqlZoo);
            ?>
            <div class="col-md-4">
                <label for="listaZoo" class="form-label">Zoológico en el que se encuentra: </label>
                <select name="listaZoo" id="listaZoo" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_zoo = $Zoo->fetch_assoc()){ ?>
                        <option value="<?php echo $row_zoo['ID'] ?>"><?= $row_zoo['Nombre']?></option>
                    <?php    } ?>
                </select>
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
                <th>ID Especie</th>
                <th>Nombre Vulgar</th>
                <th>Nombre Científico</th>
                <th>Especie</th>
                <th>Familia</th>
                <th>Nivel de peligro</th>
                <th>Zoológico</th>
                <th>Acciones</th>
            </thead>
            <?php
                $consultar = "SELECT esp.ID, esp.Nombre_vulgar, esp.Nombre_cientifico, nom.Especie, 
                    f.Familia, e.Nivel_peligro, z.Nombre
                    FROM Especie esp
                    JOIN Nombre_Especie nom ON esp.ID_NomEspecie = nom.ID
                    JOIN Familia f ON esp.ID_Familia = f.ID
                    JOIN Extincion e ON esp.ID_Extincion = e.ID
                    JOIN Zoologico z ON esp.ID_Zoo = z.ID
                    ORDER BY esp.ID ASC";
                $registros = $link->query($consultar);

                while($fila = $registros->fetch_array()){ ?>
                    <tr>
                        <td><?= $fila[0]; ?></td>
                        <td><?= $fila[1]; ?></td>
                        <td><?= $fila[2]; ?></td>
                        <td><?= $fila[3]; ?></td>
                        <td><?= $fila[4]; ?></td>
                        <td><?= $fila[5]; ?></td>
                        <td><?= $fila[6]; ?></td>
                        <td>
                            <a href="ModificarEspecie.php?ID=<?= $fila[0] ?>" class="btn btn-warning">
                                <img src = "../../Imagenes/Iconos/editar.png" width = "20px" height = "20px">
                            </a>
                            <a href="GestionEspecies.php?ID=<?= $fila[0] ?>" class="btn btn-danger">
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
            
            // Obtengo los datos cargados en el formulario de Gestionar Usuarios.
            $NomVulgar = $_POST['txtNomVulgar'];
            $NomCientifico = $_POST['txtNomCientifico'];
            $Familia = $_POST['listaFamilias'];
            $Peligro = $_POST['listaPeligro'];
            $Zoo = $_POST['listaZoo'];
            $Especie = $_POST['listaEspecie'];

            //Formulo la consulta SQL
            $sql = "INSERT INTO Especie (Nombre_vulgar, Nombre_cientifico, ID_NomEspecie, ID_Familia, ID_Extincion, ID_Zoo) 
                VALUES ('$NomVulgar', '$NomCientifico', '$Especie', '$Familia', '$Peligro', '$Zoo');";

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
                        window.location.href = 'GestionEspecies.php';
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
                        window.location.href = 'GestionEspecies.php';
                    }, 1800);
                </script>";
            }
        }

        //ELIMINAR DATOS
        if(isset($_GET['ID'])){
            $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");
            
            //Formulamos la sentencia SQL
            $primer_sql = "SELECT * FROM Especie WHERE ID = '".$ID_u."'";
            
            $registros = $link->query($primer_sql);
            if($respuesta = $registros->fetch_array()){
                //Formulamos la sentencia SQL
                $segundo_sql = "DELETE FROM Especie WHERE ID = '".$ID_u."'";
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
                        window.location.href = 'GestionEspecies.php';
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
                        window.location.href = 'GestionEspecies.php';
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