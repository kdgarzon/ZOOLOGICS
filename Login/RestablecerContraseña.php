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
    <link rel="stylesheet" href="../Estilos/PanelesContraseña.css">
    <title>Restablecer Contraseña</title>
</head>
<body>
    <div class="contenedorComun">
        <div class = "logotipo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class="contenedor_principal">
            <div class="superior">
                <h1 class="primer_titulo">Restablecer Contraseña</h1>
            </div>
            <div class = "inferior">
                <form action="RestablecerContraseña.php" method="POST" name = "formulario" class = "row g-3">
                    <label for="txtEmail" class="form-label">Correo electrónico: </label>
                    <input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="Email..." required>
                    <input type="submit" value="Verificar Correo" id = "btnVerificar" name = "btnVerificar">
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        if(isset($_POST['btnVerificar'])){
            $email = $_POST['txtEmail'];

            $sql = "SELECT * FROM Usuario WHERE Correo = '$email'";
            $queryusuario = mysqli_query($link, $sql);
            $nr = mysqli_num_rows($queryusuario);

            if($nr > 0){
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: '¡Usuario validado!',
                        width: 600,
                        padding: '2em',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'Preguntas.php?Correo='+ encodeURIComponent('$email');
                    }, 1500);
                </script>";
            }else{
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'ERROR!!',
                        text :'No hay ningún usuario registrado con este correo. Intente de nuevo.',
                        width: 600,
                        padding: '2em',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'RestablecerContraseña.php';
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