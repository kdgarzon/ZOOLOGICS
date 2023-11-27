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

    $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");

    $sqlSeleccionar = "SELECT * FROM Nombre_Especie WHERE ID = $ID_u";
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
    <title>Modificar especie añadida</title>
</head>
<body>
    <div class = "contenedor_principal">
        <div class = "logotipo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class = "segundo">
            <div class="cabecera">
                <h1 class="titulo">Editar lista de especies</h1>
            </div>
            <form method="POST" name = "formulario" class = "col-4 p-3 m-auto">
                <?php while ($fila = $registros->fetch_array()) { ?>
                    <input type="hidden" id="id" name="id" value="<?= $fila[0]; ?>">
                    <div class="mb-1">
                        <label for="txtEspecie" class="form-label">Nombre de la especie: </label>
                        <input type="text" value="<?= $fila[1]; ?>" class="form-control" id="txtEspecie" name="txtEspecie" placeholder="Especie para añadir..." required>
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
            if(!empty($_POST['txtEspecie'])){
                $ID = $_POST['id'];
                $Especie = $_POST['txtEspecie'];

                $sql_actualizar = "UPDATE Nombre_Especie SET Especie = '$Especie' WHERE ID = $ID";
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
                            window.location.href = 'AñadirEspecies.php?ID_Rol=".$rol."';
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
                            window.location.href = 'ModificarESP.php?ID_Rol=".$rol."';
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
                        window.location.href = 'ModificarESP.php?ID_Rol=".$rol."';
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