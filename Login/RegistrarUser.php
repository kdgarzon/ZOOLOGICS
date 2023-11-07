<?php
    session_start();
    require('../config/conexion.php');
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
    <link rel="stylesheet" href="../Estilos/Registrar.css">
    <title>Registrar</title>
</head>
<body>
    <div class="card_registrarse">
        <div class="cardUno">
            <div class="logotipo">
                <img src="../Imagenes/Iconos/tucan.png" alt="Tucan" width="70px" height="70px">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <h1 class="titulo-principal">Registro de usuarios</h1>
            <form action="RegistrarUser.php" method="POST" class="registro-form">
                <div class="fila">
                    <div class="group">
                        <label for="txtNombre" class="subtitulo">Nombre: </label>
                        <input type="text" id="txtNombre" name="txtNombre" class="entrada" required>
                    </div>
                    <div class="group">
                        <label for="txtApellido" class="subtitulo">Apellido: </label>
                        <input type="text" id="txtApellido" name="txtApellido" class="entrada" required>
                    </div>
                </div>
                <div class="fila">
                    <div class="group">
                        <label for="txtNumeroIdent" class="subtitulo">Número de Identificación: </label>
                        <input type="number" id="txtNumeroIdent" name="txtNumeroIdent" class="entrada" required>
                    </div>
                    <div class="group">
                        <label for="txtCorreo" class="subtitulo">Correo: </label>
                        <input type="email" id="txtCorreo" name="txtCorreo" class="entrada" required>
                    </div>
                </div>
                <div class="fila">
                    <div class="group">
                        <label for="txtUser" class="subtitulo">Username: </label>
                        <input type="text" id="txtUser" name="txtUser" class="entrada" required>
                    </div>
                    <div class="group">
                        <label for="txtPass" class="subtitulo">Password: </label>
                        <input type="password" id="txtPass" name="txtPass" class="entrada" required>
                    </div>
                </div>
                <div class="fila">
                    <div class="group">
                        <label for="listaRoles" class="subtitulo">Rol: </label>
                        <select name="listaRoles" id="listaRoles" class="entrada">
                            <option value="">Seleccionar...</option>
                            <option value="1">Zoológico de San Diego</option>
                            <option value="2">Zoológico de Singapur</option>
                            <option value="3">Zoológico de Toronto</option>
                            <option value="4">Zoológico Loro Parque</option>
                            <option value="5">Zoológico de Schonbrunn</option>
                            <option value="6">Zoológico de Londres</option>
                            <option value="7">Zoológico de Berlín</option>
                            <option value="8">Zoológico del Bronx</option>
                            <option value="9">Zoológico de Chapultepec</option>
                            <option value="10">Acuario Two Oceans</option>
                            <option value="11">Administrador</option>
                            <option value="12">Usuario</option>
                        </select>
                    </div>
                </div>
                <div class="btn">
                    <input type="submit" id="btnRegistrarse" name="btnRegistrarse" value="Registrarse">
                </div><br>
            </form>
            <label for="btnIngresar" class="subtitulo" id="subAux">Si ya tienes una cuenta</label>
            <div class="btn">
                <a href="login.php" class="btnIngresar">Iniciar Sesión</a>
            </div>
        </div>
        <div class="cardDos">
            <img src="../Imagenes/San Diego/Imagenes login/foto5.jpg" alt="" width="510px" height="777px">
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        if(isset($_POST['btnRegistrarse'])){
            $Nombre = $_POST['txtNombre'];
            $Apellido = $_POST['txtApellido'];
            $Ident = $_POST['txtNumeroIdent'];
            $Correo = $_POST['txtCorreo'];
            $User = $_POST['txtUser'];
            $Pass = $_POST['txtPass'];
            $Rol = $_POST['listaRoles'];
    
            $sql = "SELECT * FROM Usuario WHERE User ='$User'";
            $queryusuario = mysqli_query($link, $sql);
            $respuesta = mysqli_num_rows($queryusuario);
    
            if($respuesta == 0){
                $sql_dos = "INSERT INTO Usuario (Identificacion, Nombre, Apellido, Correo, User, Pass, ID_Rol)
                VALUES ('$Ident', '$Nombre', '$Apellido', '$Correo', '$User', '$Pass', '$Rol')";
    
                if(mysqli_query($link, $sql_dos)){
                    echo "<script type='text/javascript'>
                        Swal.fire({
                            title: '¡Usuario creado correctamente!',
                            width: 600,
                            padding: '2em',
                            icon: 'success',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        setTimeout(function() {
                            // Redirige o realiza otra acción después de cerrar la alerta
                            window.location.href = 'Login.html';
                        }, 1500);
                    </script>";
                }else{
                    echo "<script type='text/javascript'>
                        Swal.fire({
                            title: 'ERROR!!',
                            text :'Algo salió mal y el usuario no pudo ser creado. Intente de nuevo.',
                            width: 600,
                            padding: '2em',
                            icon: 'error',
                            showConfirmButton: false,
                            timer: 1800
                        });
                        setTimeout(function() {
                            // Redirige o realiza otra acción después de cerrar la alerta
                            window.location.href = 'RegistrarUser.php';
                        }, 1800);
                    </script>";
                }
            }else{
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'El usuario ya está registrado',
                        width: 600,
                        padding: '2em',
                        icon: 'info',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'Login.html';
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