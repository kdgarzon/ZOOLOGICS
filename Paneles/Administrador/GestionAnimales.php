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
    <title>Gestión de Animales</title>
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
    <h1 class="tituloInicial">GESTION DE ANIMALES</h1>
    <hr class="linea">
    <div class = "EntradaDatos">
        <form action="GestionAnimales.php?ID_Rol=<?=$rol?>" method = "POST" name = "formulario" class = "row g-3">
            <h2 class = "tit">Información general</h2>
            <?php
                $sqlEspecies = "SELECT ID, Especie FROM Nombre_Especie";
                $Especies = $link->query($sqlEspecies);
            ?>
            <div class="col-md-6">
                <label for="listaEspecies" class="form-label">Especie del animal: </label>
                <select name="listaEspecies" id="listaEspecies" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_esp = $Especies->fetch_assoc()){ ?>
                        <option value="<?php echo $row_esp['ID'] ?>"><?= $row_esp['Especie']?></option>
                    <?php    } ?>
                </select>
            </div>
            <?php
                $sqlSexo = "SELECT ID, Sexo FROM Sexo";
                $Sexo = $link->query($sqlSexo);
            ?>
            <div class="col-md-6">
                <label for="listaSexo" class="form-label">Sexo:</label>
                <select name="listaSexo" id="listaSexo" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_sex = $Sexo->fetch_assoc()){ ?>
                        <option value="<?php echo $row_sex['ID'] ?>"><?= $row_sex['Sexo']?></option>
                    <?php    } ?>
                </select>
            </div>
            <?php
                $sqlCont = "SELECT ID, Continente FROM Continente";
                $Continente = $link->query($sqlCont);
            ?>
            <div class="col-md-6">
                <label for="listaContinentes" class="form-label">Continente: </label>
                <select name="listaContinentes" id="listaContinentes" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_cont = $Continente->fetch_assoc()){ ?>
                        <option value="<?php echo $row_cont['ID'] ?>"><?= $row_cont['Continente']?></option>
                    <?php    } ?>
                </select>
            </div>
            <?php
                $sqlPaises = "SELECT ID, Pais FROM Pais";
                $paises = $link->query($sqlPaises);
            ?>
            <div class="col-md-6">
            <label for="listaPais" class="form-label">País: </label>
                <select id="listaPais" name="listaPais" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_pais = $paises->fetch_assoc()){ ?>
                        <option value="<?php echo $row_pais['ID'] ?>"><?= $row_pais['Pais']?></option>
                    <?php    } ?>
                </select>
            </div>
            <div class="col-md-4">
                <label for="txtAnioNacimiento" class="form-label">Año de nacimiento: </label>
                <input type="number" class="form-control" placeholder="Año de nacimiento..." id="txtAnioNacimiento" name="txtAnioNacimiento" required>
            </div>
            <?php
                if($rol == 11){ 
                    $sqlZoo = "SELECT ID, Nombre FROM Zoologico";
                    $Zoo = $link->query($sqlZoo); ?>

                    <div class="col-md-4">
                        <label for="listaZoo" class="form-label">Zoológico al que pertenece: </label>
                        <select name="listaZoo" id="listaZoo" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                            while($row_zoo = $Zoo->fetch_assoc()){ ?>
                                <option value="<?php echo $row_zoo['ID'] ?>"><?= $row_zoo['Nombre']?></option>
                            <?php    } ?>
                        </select>
                    </div>
                <?php } else
                if($rol != 11){ 
                    $sqlZoo = "SELECT ID, Nombre FROM Zoologico WHERE ID=$rol";
                    $Zoo = $link->query($sqlZoo); ?>
                    <div class="col-md-4">
                        <label for="listaZoo" class="form-label">Zoológico al que pertenece: </label>
                        <select name="listaZoo" id="listaZoo" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                            while($row_zoo = $Zoo->fetch_assoc()){ ?>
                                <option value="<?php echo $row_zoo['ID'] ?>"><?= $row_zoo['Nombre']?></option>
                            <?php    } ?>
                        </select>
                    </div>
                <?php }
            ?>
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
                <th>ID Animal</th>
                <th>Especie</th>
                <th>Sexo</th>
                <th>Año de nacimiento</th>
                <th>Pais</th>
                <th>Continente</th>
                <th>Zoológico</th>
                <th>Acciones</th>
            </thead>
            <?php
                if($rol == 11){
                    $consultar = "SELECT a.ID, esp.Especie, s.Sexo, a.Anio_Nacimiento, p.Pais, c.Continente, z.Nombre
                    FROM Animal a
                    JOIN Nombre_Especie esp ON a.ID_Especie = esp.ID
                    JOIN Sexo s ON a.ID_Sexo = s.ID
                    JOIN Pais p ON a.ID_Pais = p.ID
                    JOIN Continente c ON a.ID_Continente = c.ID
                    JOIN Zoologico z ON a.ID_Zoo = z.ID
                    ORDER BY a.ID ASC";

                }else
                if($rol != 11){
                    $consultar = "SELECT a.ID, esp.Especie, s.Sexo, a.Anio_Nacimiento, p.Pais, c.Continente, z.Nombre
                    FROM Animal a
                    JOIN Nombre_Especie esp ON a.ID_Especie = esp.ID
                    JOIN Sexo s ON a.ID_Sexo = s.ID
                    JOIN Pais p ON a.ID_Pais = p.ID
                    JOIN Continente c ON a.ID_Continente = c.ID
                    JOIN Zoologico z ON a.ID_Zoo = z.ID AND a.ID_Zoo = $rol
                    ORDER BY a.ID ASC";
                }

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
                            <a href="ModificarAnimal.php?ID=<?= $fila[0] ?>&ID_Rol=<?= $rol ?>" class="btn btn-warning">
                                <img src = "../../Imagenes/Iconos/editar.png" width = "20px" height = "20px">
                            </a>
                            <a href="GestionAnimales.php?ID=<?= $fila[0] ?>&ID_Rol=<?= $rol ?>" class="btn btn-danger">
                                <img src = "../../Imagenes/Iconos/eliminar.png" width = "20px" height = "20px">
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
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        //INSERTAR DATOS
        if(isset($_POST['btnAgregar'])){
            echo "El boton Agregar funciona";
            // Obtengo los datos cargados en el formulario de Gestionar Animales.
            $Especie = $_POST['listaEspecies'];
            $Sexo = $_POST['listaSexo'];
            $Continente = $_POST['listaContinentes'];
            $Pais = $_POST['listaPais'];
            $Nacimiento = $_POST['txtAnioNacimiento'];
            $Zoo = $_POST['listaZoo'];

            //Formulo la consulta SQL
            $sql = "INSERT INTO Animal (ID_Especie, ID_Sexo, Anio_Nacimiento, ID_Pais, ID_Continente, ID_Zoo) 
                VALUES ($Especie, $Sexo, $Nacimiento, $Pais, $Continente, $Zoo);";

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
                        window.location.href = 'GestionAnimales.php?ID_Rol=".$rol."';
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
                        window.location.href = 'GestionAnimales.php?ID_Rol=".$rol."';
                    }, 1800);
                </script>";
            }
        }

        //ELIMINAR DATOS
        if(isset($_GET['ID'])){
            $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");
            
            //Formulamos la sentencia SQL
            $primer_sql = "SELECT * FROM Animal WHERE ID = '".$ID_u."'";
            
            $registros = $link->query($primer_sql);
            if($respuesta = $registros->fetch_array()){
                //Formulamos la sentencia SQL
                $segundo_sql = "DELETE FROM Animal WHERE ID = '".$ID_u."'";
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
                        window.location.href = 'GestionAnimales.php?ID_Rol=".$rol."';
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
                        window.location.href = 'GestionAnimales.php?ID_Rol=".$rol."';
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