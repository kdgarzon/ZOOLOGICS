<?php
    session_start();
    require('../config/conexion.php');
    $link = conectar();
    $id = (isset($_GET['ID']) ? $_GET['ID'] : 0);
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
    <title>Cambiar contraseña</title>
</head>
<body>
    <div class="contenedorComun">
        <div class = "logotipo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class = "cajita">
            <div class = "superior">
                <h1 class = "titEnc">Cambio de Contraseña</h1>
            </div>
            <form action="CambiarContraseña.php" method="POST" class = "inferior" id ="segundoForm" >
                <input type="hidden" id="ID_u" name="ID_u" value="<?php echo $id; ?>">
                <div >
                    <label for="txtPassNueva" class="form-label">Contraseña nueva:</label>
                    <input type="password" class="form-control" id="txtPassNueva" name="txtPassNueva" placeholder="Contraseña nueva..." required>
                </div>
                <div >
                    <label for="txtPassConfirmar" class="form-label">Confirmar contraseña:</label>
                    <input type="password" class="form-control" id="txtPassConfirmar" name="txtPassConfirmar" placeholder="Confirmar contraseña..." required>
                </div>
                <input type="submit" value="Confirmar" id="btnConfirmar" name="btnConfirmar">
            </form>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        if(isset($_POST['btnConfirmar'])){
            $aux = $_POST['ID_u'];
            $nueva = $_POST['txtPassNueva'];
            $confirmacion = $_POST['txtPassConfirmar'];
            $id = (isset($_GET['ID']) ? $_GET['ID'] : 0);
            echo $id;

            if($nueva == $confirmacion){    
                $sql = "UPDATE Usuario SET Pass = '$nueva' WHERE ID = '$aux'";
                $link->query($sql);

                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: '¡Contraseña actualizada con éxito!',
                        width: 600,
                        padding: '2em',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'login.php';
                    }, 1500);
                </script>";
            }else{
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'ERROR!!',
                        text :'Las contraseñas no coinciden. Intente de nuevo.',
                        width: 600,
                        padding: '2em',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'CambiarContraseña.php?ID=' + encodeURIComponent($aux)';
                    }, 1800);
                </script>";
            }
        }
    ?>
</body>
</html>