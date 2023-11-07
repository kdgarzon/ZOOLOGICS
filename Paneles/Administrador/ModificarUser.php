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

    $sqlRoles = "SELECT ID, Rol FROM Rol";
    $roles = $link->query($sqlRoles);
    $roles->data_seek(0);

    $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");

    $sqlSeleccionar = "SELECT * FROM Usuario WHERE ID = $ID_u";
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
    <title>Modificar Usuario</title>
</head>
<body>
    <div class = "contenedor_principal">
        <div class = "logotipo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class = "segundo">
            <div class="cabecera">
                <h1 class="titulo">Editar usuario</h1>
            </div>
            <form method="POST" name = "formulario" class = "col-4 p-3 m-auto">
                <?php while ($fila = $registros->fetch_array()) { ?>
                    <input type="hidden" id="id" name="id" value="<?= $fila[0]; ?>">
                    <div class="mb-1">
                        <label for="txtID" class="form-label">Identificación usuario: </label>
                        <input type="number" value="<?= $fila[1]; ?>" class="form-control" id="txtID" name="txtID" placeholder="Número de identificación..." required>
                    </div>

                    <div class="mb-1">
                        <label for="txtNombre" class="form-label">Nombre: </label>
                        <input type="text" value="<?= $fila[2]; ?>" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre..." required>
                    </div>

                    <div class="mb-1">
                        <label for="txtApellido" class="form-label">Apellido: </label>
                        <input type="text" value="<?= $fila[3]; ?>" class="form-control" id="txtApellido" name="txtApellido" placeholder="Apellido..." required>
                    </div>

                    <div class="mb-1">
                        <label for="txtCorreo" class="form-label">Correo electrónico: </label>
                        <input type="email" value="<?= $fila[4]; ?>" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Email..." required>
                    </div>

                    <div class="mb-1">
                        <label for="txtUser" class="form-label">Username: </label>
                        <input type="text" value="<?= $fila[5]; ?>" class="form-control" id="txtUser" name="txtUser" placeholder="User..." required>
                    </div>

                    <div class="mb-1">
                        <label for="txtPass" class="form-label">Password: </label>
                        <input type="password" value="<?= $fila[6]; ?>" class="form-control" id="txtPass" name="txtPass" placeholder="Password..." required>
                    </div>

                    <div class="mb-1">
                        <label for="listaRoles" class="form-label">Rol: </label>
                        <select id="listaRoles" name="listaRoles" class="form-select" required>
                            <option selected>Seleccionar...</option>
                            <?php
                                while ($row_rol = $roles->fetch_assoc()) {
                                    $selected = ($row_rol['ID'] == $fila[7]) ? 'selected' : ''; // Verifica si coincide con el valor que esta en la posición 7
                            ?>
                            <option value="<?php echo $row_rol['ID'] ?>" <?php echo $selected; ?>>
                                <?= $row_rol['Rol'] ?>
                            </option>
                            <?php } ?>
                        </select>
                    </div>
                <?php } ?>
                <div class="col-md-2" id="boton">
                    <input type="submit" class="btn" style="background-color: #38A843;" value="ACTUALIZAR" id="btnActualizar" name="btnActualizar">
                </div>
            </form>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        if(isset($_POST['btnActualizar'])){
            if(!empty($_POST['txtID']) && !empty($_POST['txtNombre']) && !empty($_POST['txtApellido']) && !empty($_POST['txtCorreo']) && !empty($_POST['txtUser']) && !empty($_POST['txtPass']) && !empty($_POST['listaRoles'])){
                $ID = $_POST['id'];
                $Identi = $_POST['txtID'];
                $Nom = $_POST['txtNombre'];
                $Apel = $_POST['txtApellido'];
                $Em = $_POST['txtCorreo'];
                $Us = $_POST['txtUser'];
                $Pas = $_POST['txtPass'];
                $Rol = $_POST['listaRoles'];

                $sql_actualizar = "UPDATE Usuario 
                SET Identificacion = $Identi, Nombre = '$Nom', Apellido = '$Apel', Correo = '$Em', User = '$Us', Pass = '$Pas', ID_Rol = $Rol 
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
                            window.location.href = 'GestionUsuarios.php';
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
                            window.location.href = 'ModificarUser.php';
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
                        window.location.href = 'ModificarUser.php';
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