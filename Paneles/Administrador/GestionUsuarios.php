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
    <link rel="stylesheet" href="../../Estilos/estilos.css">
    <link rel="stylesheet" href="../../Estilos/Tablas.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.all.min.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.8.0/dist/sweetalert2.min.css" rel="stylesheet">
    <title>Gestión de Usuarios</title>
    <style>
        .informacion{
            margin-left: 9%;
            margin-right:9%;
        }
    </style>
</head>
<body>
    <?php include '../../config/header.php';?>
    <h1 class="tituloInicial">GESTION DE USUARIOS</h1>
    <hr class="linea">
    <div class = "EntradaDatos">
        <form action="GestionUsuarios.php" method = "POST" name = "formulario" class = "row g-3">
            <h2 class = "tit">Información general</h2>
            <div class="col-md-6">
                <label for="txtID" class="form-label">Número de Identificación:</label>
                <input type="number" class="form-control" id="txtID" name="txtID" placeholder="Identificación del usuario..." required>
            </div>
            <div class="col-md-6">
                <label for="txtNombre" class="form-label">Nombre:</label>
                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Nombre del usuario..." required>
            </div>
            <div class="col-md-4">
                <label for="txtApellido" class="form-label">Apellido: </label>
                <input type="text" class="form-control" placeholder="Apellido del usuario..." id="txtApellido" name="txtApellido" required>
            </div>
            <div class="col-md-4">
                <label for="txtUser" class="form-label">Nombre de usuario: </label>
                <input type="text" class="form-control" placeholder="Usuario..." id="txtUser" name="txtUser" required>
            </div>
            <div class="col-md-4">
                <label for="txtPass" class="form-label">Contraseña: </label>
                <input type="password" class="form-control" placeholder="Contraseña..." id="txtPass" name="txtPass" required>
            </div>
            <div class="col-md-4">
                <label for="txtCorreo" class="form-label">Correo electrónico: </label>
                <input type="email" class="form-control" placeholder="Correo del usuario..." id="txtCorreo" name="txtCorreo" required>
            </div>
            <?php
                $sqlRoles = "SELECT ID, Rol FROM Rol";
                $roles = $link->query($sqlRoles);
            ?>
            <div class="col-md-4"><!--Lista desplegable-->
                <label for="listaRoles" class="form-label">Rol: </label>
                <select id="listaRoles" name="listaRoles" class="form-select" required>
                    <option selected>Seleccionar...</option>
                    <?php
                    while($row_rol = $roles->fetch_assoc()){ ?>
                        <option value="<?php echo $row_rol['ID'] ?>"><?= $row_rol['Rol']?></option>
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
                <th>ID Usuario</th>
                <th>Identificación</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Username</th>
                <th>Password</th>
                <th>Rol</th>
                <th>Acciones</th>
            </thead>
            <?php
                $consultar = "SELECT u.ID, u.Identificacion, u.Nombre, u.Apellido, u.Correo, u.User, u.Pass, r.Rol
                    FROM Usuario u
                    JOIN Rol r ON u.ID_Rol = r.ID
                    ORDER BY u.ID ASC";                
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
                        <td><?= $fila[7]; ?></td>
                        <td>
                            <a href="ModificarUser.php?ID=<?= $fila[0] ?>" class="btn btn-warning">
                                <img src = "../../Imagenes/Iconos/editar.png" width = "20px" height = "20px">
                            </a>
                            <a href="GestionUsuarios.php?ID=<?= $fila[0] ?>" class="btn btn-danger">
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
            $Identificacion = $_POST['txtID'];
            $Nom = $_POST['txtNombre'];
            $Ape = $_POST['txtApellido'];
            $Usu = $_POST['txtUser'];
            $Contra = $_POST['txtPass'];
            $Correo = $_POST['txtCorreo'];
            $Rol = $_POST['listaRoles'];

            //Formulo la consulta SQL
            $sql = "INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol) 
                VALUES ('$Identificacion', '$Nom', '$Ape', '$Correo', '$Usu', '$Contra', '$Rol');";

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
                        window.location.href = 'GestionUsuarios.php';
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
                        window.location.href = 'GestionUsuarios.php';
                    }, 1800);
                </script>";
            }
        }

        //ELIMINAR DATOS
        if(isset($_GET['ID'])){
            $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");
            
            //Formulamos la sentencia SQL
            $primer_sql = "SELECT * FROM Usuario WHERE ID = '".$ID_u."'";
            
            $registros = $link->query($primer_sql);
            if($respuesta = $registros->fetch_array()){
                //Formulamos la sentencia SQL
                $segundo_sql = "DELETE FROM Usuario WHERE ID = '".$ID_u."'";
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
                        window.location.href = 'GestionUsuarios.php';
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
                        window.location.href = 'GestionUsuarios.php';
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