<?php
    session_start();
    include ('../config/Conexion.php');
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
    <link rel="stylesheet" href="../Estilos/loginIngresar.css">
    <title>Login</title>
</head>
<body>
    <div class="card_principal">
        <div class="card_uno">
            <div class="logotipo">
                <img src="../Imagenes/Iconos/tucan.png" alt="Tucan" width="70px" height="70px"> 
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <div class="encabezado_fotos">
                <img src="../Imagenes/San Diego/Imagenes login/foto1.jpg" alt="" width="210px" height="210px" class="foto1">
                <img src="../Imagenes/San Diego/Imagenes login/foto2.jpg" alt="" width="210px" height="210px" class="foto2">
                <img src="../Imagenes/San Diego/Imagenes login/foto3.jpg" alt="" width="210px" height="210px" class="foto3">
                <img src="../Imagenes/San Diego/Imagenes login/foto4.jpg" alt="" width="210px" height="210px" class="foto4">
            </div>
            <div class="texto_adicional">
                <h2 class="sub">Sistema de <span class="resalto">gestión</span> de <span class="resalto">zoológicos</span></h2>
            </div>
        </div>
        <div class="card_dos">
            <h1 class="titulo">¡Hola!</h1>
            <p class="encabezado">Estamos felices de tenerte de vuelta!</p>
            <form action="login.php" method="POST" >
                <label for="txtUser" class="subtitulo">Username: </label><br>
                <input type="text" id="txtUser" name="txtUser" class="entrada" required><br>
                <label for="txtPass" class="subtitulo">Password: </label><br>
                <input type="password" id="txtPass" name="txtPass" class="entrada" required><br>
                <a href="RestablecerContraseña.php" class="opcion">¿Olvidaste tu contraseña?</a><br>
                <label for="listaRoles" class="subtitulo">Iniciar sesión como: </label><br>
                <select name="listaRoles" id="listaRoles">
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
                </select><br>
                <input type="submit" value="Iniciar Sesión" id="btnIngresar" name="btnIngresar">
            </form>
            <label for="btnRegistrarse" class="subtitulo" id="aux">Si aún no tienes cuenta</label><br>
            <div class="btn">
                <a href="RegistrarUser.php" class="btnRegistrarse">Registrarse</a>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        
        if(isset($_POST['btnIngresar'])){
            // Obtengo los datos cargados en el formulario de login.
            $user = $_POST['txtUser'];
            $pass = $_POST['txtPass'];
            $rol = $_POST['listaRoles']; 
            $sql = "SELECT * FROM Usuario WHERE ID_Rol = '$rol' AND User ='$user' AND Pass = '$pass'";

            $queryusuario = mysqli_query($link, $sql);
            $nr = mysqli_num_rows($queryusuario);

            if($nr > 0){
                $_SESSION['txtUser'] = $user;
                if($rol == 1){
                    header('Location: ../Paneles/Zoologicos/PanelSanDiego.php');
                    exit;
                }else
                if($rol == 2){
                    header('Location: ../Paneles/Zoologicos/PanelSingapur.php');
                    exit;
                }else
                if($rol == 3){
                    header('Location: ../Paneles/Zoologicos/PanelToronto.php');
                    exit;
                }else
                if($rol == 4){
                    header('Location: ../Paneles/Zoologicos/PanelLoroParque.php');
                    exit;
                }else
                if($rol == 5){
                    header('Location: ../Paneles/Zoologicos/PanelSchonbrunn.php');
                    exit;
                }else
                if($rol == 6){
                    header('Location: ../Paneles/Zoologicos/PanelLondres.php');
                    exit;
                }else
                if($rol == 7){
                    header('Location: ../Paneles/Zoologicos/PanelBerlin.php');
                    exit;
                }else
                if($rol == 8){
                    header('Location: ../Paneles/Zoologicos/PanelBronx.php');
                    exit;
                }else
                if($rol == 9){
                    header('Location: ../Paneles/Zoologicos/PanelChapultepec.php');
                    exit;
                }else
                if($rol == 10){
                    header('Location: ../Paneles/Zoologicos/PanelTwoOceans.php');
                    exit;
                }else
                if($rol == 11){
                    header('Location: ../Paneles/Administrador/PanelAdministrador.php');
                    exit;
                }else
                if($rol == 12){
                    header('Location: ../Paneles/Usuario/PanelUsuario.php');
                    exit;
                }
            }else{
                echo "<script> alert('Usuario, contraseña o rol incorrecto.');
                    window.location = 'login.php' </script> ";
                exit;
            }
        }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>