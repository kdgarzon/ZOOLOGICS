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

    $sqlPaises = "SELECT ID, Pais FROM Pais";
    $paises = $link->query($sqlPaises);
    $paises->data_seek(0);

    $sqlCiudades = "SELECT ID, Ciudad FROM Ciudad";
    $Ciudades = $link->query($sqlCiudades);
    $Ciudades->data_seek(0);

    $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");

    $sqlSeleccionar = "SELECT * FROM Zoologico WHERE ID = $ID_u";
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
    <link rel="stylesheet" href="../../Estilos/Editar.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.all.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Modificar Zoológico</title>
</head>
<body>
    <div class = "contenedor_principal">
        <div class = "logotipo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class = "segundo">
            <div class="cabecera">
                <h1 class="titulo">Editar zoológico</h1>
            </div>
            <form method="POST" name = "formulario" class = "col-4 p-3 m-auto">
                <?php while ($fila = $registros->fetch_array()) { ?>
                    <input type="hidden" id="id" name="id" value="<?= $fila[0]; ?>">
                    <div class="mb-1">
                        <label for="txtZoo" class="form-label">Nombre del zoológico: </label>
                        <input type="text" value="<?= $fila[1]; ?>" class="form-control" id="txtZoo" name="txtZoo" placeholder="Zoológico..." required>
                    </div>

                    <div class="mb-1">
                        <label for="listaCiudad" class="form-label">Ciudad: </label>
                        <select id="listaCiudad" name="listaCiudad" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_ciudad = $Ciudades->fetch_assoc()) {
                                    $selected = ($row_ciudad['ID'] == $fila[2]) ? 'selected' : '';
                            ?>
                            <option value="<?php echo $row_ciudad['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_ciudad['Ciudad'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="listaPais" class="form-label">País: </label>
                        <select id="listaPais" name="listaPais" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_pais = $paises->fetch_assoc()) {
                                    $selected = ($row_pais['ID'] == $fila[3]) ? 'selected' : '';
                            ?>
                            <option value="<?php echo $row_pais['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_pais['Pais'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="txtTamanio" class="form-label">Tamaño en m2 (metros cuadrados): </label>
                        <input type="number" value="<?= $fila[4]; ?>" class="form-control" id="txtTamanio" name="txtTamanio" placeholder="Tamaño en metros cuadrados..." required>
                    </div>

                    <div class="mb-1">
                        <label for="txtPresupuesto" class="form-label">Presupuesto anual (dólares): </label>
                        <input type="number" value="<?= $fila[5]; ?>" class="form-control" id="txtPresupuesto" name="txtPresupuesto" placeholder="Presupuesto..." required>
                    </div>

                <?php } ?>
                <div class="col-md-2 d-flex justify-content-between" id="boton">
                    <input type="submit" class="btn" style="background-color:#38A843" value="ACTUALIZAR" id="btnActualizar" name="btnActualizar">
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        if(isset($_POST['btnActualizar'])){
            if(!empty($_POST['txtZoo']) && !empty($_POST['listaCiudad']) && !empty($_POST['listaPais']) && !empty($_POST['txtTamanio']) && !empty($_POST['txtPresupuesto'])){
                $ID = $_POST['id'];
                $zoo = $_POST['txtZoo'];
                $Ciu = $_POST['listaCiudad'];
                $Pais = $_POST['listaPais'];
                $Tam = $_POST['txtTamanio'];
                $Pre = $_POST['txtPresupuesto'];

                $sql_actualizar = "UPDATE Zoologico 
                SET Nombre = '$zoo', ID_Ciudad = $Ciu, ID_Pais = $Pais, Tamanio = $Tam, Presupuesto_anual = $Pre 
                WHERE ID = $ID";
                $res = $link->query($sql_actualizar);

                if($res){
                    echo "<script type='text/javascript'>
                        Swal.fire({
                            title: '¡Los datos se actualizaron correctamente!',
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
                            text :'Algo salió mal y los datos no pudieron ser actualizados. Intente de nuevo.',
                            width: 600,
                            padding: '2em',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        setTimeout(function() {
                            // Redirige o realiza otra acción después de cerrar la alerta
                            window.location.href = 'ModificarZoo.php';
                        }, 1800);
                    </script>";
                }
            }else{
                //Alerta de que hay campos vacios
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'ERROR!!',
                        text :'Hay campos vacíos. Intente de nuevo.',
                        width: 600,
                        padding: '2em',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'ModificarZoo.php';
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