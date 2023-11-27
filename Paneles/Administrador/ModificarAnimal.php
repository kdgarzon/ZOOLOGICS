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

    $sqlEspecies = "SELECT ID, Especie FROM Nombre_Especie";
    $Especies = $link->query($sqlEspecies);
    $Especies->data_seek(0);

    $sqlSexo = "SELECT ID, Sexo FROM Sexo";
    $Sexo = $link->query($sqlSexo);
    $Especies->data_seek(0);

    $sqlCont = "SELECT ID, Continente FROM Continente";
    $Continente = $link->query($sqlCont);
    $Continente->data_seek(0);

    $sqlPaises = "SELECT ID, Pais FROM Pais";
    $paises = $link->query($sqlPaises);
    $paises->data_seek(0);

    $sqlZoo = "SELECT ID, Nombre FROM Zoologico";
    $Zoo = $link->query($sqlZoo);
    $Zoo->data_seek(0);

    $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");

    $sqlSeleccionar = "SELECT * FROM Animal WHERE ID = $ID_u";
    $registros = $link->query($sqlSeleccionar);

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
    <link rel="stylesheet" href="../../Estilos/Editar.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.all.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Modificar Animal</title>
</head>
<body>
    <div class = "contenedor_principal">
        <div class = "logotipo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class = "segundo">
            <div class="cabecera">
                <h1 class="titulo">Editar animal</h1>
            </div>
            <form method="POST" name = "formulario" class = "col-4 p-3 m-auto">
                <?php while ($fila = $registros->fetch_array()) { ?>
                    <input type="hidden" id="id" name="id" value="<?= $fila[0]; ?>">
                    
                    <div class="mb-1">
                        <label for="listaEspecie" class="form-label">Especie del animal: </label>
                        <select id="listaEspecie" name="listaEspecie" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_esp = $Especies->fetch_assoc()) {
                                    $selected = ($row_esp['ID'] == $fila[1]) ? 'selected' : ''; // Verifica si coincide con el valor que esta en la posición 7
                            ?>
                            <option value="<?php echo $row_esp['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_esp['Especie'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="listaSexo" class="form-label">Sexo: </label>
                        <select id="listaSexo" name="listaSexo" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_sex = $Sexo->fetch_assoc()) {
                                    $selected = ($row_sex['ID'] == $fila[2]) ? 'selected' : ''; // Verifica si coincide con el valor que esta en la posición 7
                            ?>
                            <option value="<?php echo $row_sex['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_sex['Sexo'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="txtAnioNacimiento" class="form-label">Año de nacimiento: </label>
                        <input type="number" value="<?= $fila[3]; ?>" class="form-control" id="txtAnioNacimiento" name="txtAnioNacimiento" placeholder="Año de nacimiento..." required>
                    </div>

                    <div class="mb-1">
                        <label for="listaPais" class="form-label">País: </label>
                        <select id="listaPais" name="listaPais" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_pais = $paises->fetch_assoc()) {
                                    $selected = ($row_pais['ID'] == $fila[4]) ? 'selected' : ''; // Verifica si coincide con el valor que esta en la posición 7
                            ?>
                            <option value="<?php echo $row_pais['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_pais['Pais'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="listaContinentes" class="form-label">Continente: </label>
                        <select id="listaContinentes" name="listaContinentes" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_cont = $Continente->fetch_assoc()) {
                                    $selected = ($row_cont['ID'] == $fila[5]) ? 'selected' : ''; // Verifica si coincide con el valor que esta en la posición 7
                            ?>
                            <option value="<?php echo $row_cont['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_cont['Continente'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>

                    <div class="mb-1">
                        <label for="listaZoo" class="form-label">Zoológico al que pertenece: </label>
                        <select id="listaZoo" name="listaZoo" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_zoo = $Zoo->fetch_assoc()) {
                                    $selected = ($row_zoo['ID'] == $fila[6]) ? 'selected' : ''; // Verifica si coincide con el valor que esta en la posición 7
                            ?>
                            <option value="<?php echo $row_zoo['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_zoo['Nombre'] ?>
                            </option>
                            <?php } ?>
                        </select>
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
            if(!empty($_POST['listaEspecie']) && !empty($_POST['listaSexo']) && !empty($_POST['txtAnioNacimiento']) && !empty($_POST['listaPais']) && !empty($_POST['listaContinentes']) && !empty($_POST['listaZoo'])){
                $ID = $_POST['id'];
                $Especie = $_POST['listaEspecie'];
                $Sex = $_POST['listaSexo'];
                $Anio = $_POST['txtAnioNacimiento'];
                $Pais = $_POST['listaPais'];
                $Cont = $_POST['listaContinentes'];
                $Zoo = $_POST['listaZoo'];

                $sql_actualizar = "UPDATE Animal 
                SET ID_Especie = $Especie, ID_Sexo = $Sex, Anio_Nacimiento = $Anio, ID_Pais = $Pais, ID_Continente = $Cont, ID_Zoo = $Zoo 
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
                            window.location.href = 'GestionAnimales.php?ID_Rol=".$rol."';
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
                            window.location.href = 'ModificarAnimal.php?ID_Rol=".$rol."';
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
                        window.location.href = 'ModificarAnimal.php';
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