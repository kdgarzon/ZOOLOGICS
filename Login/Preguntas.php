<?php
    session_start();
    require('../config/conexion.php');
    $link = conectar();

    $preguntas = array(); // Inicializar $preguntas como un array vacío

    if(isset($_GET['Correo'])){
        $co = (isset($_GET['Correo'])?$_GET['Correo']:"");

        $primer_sql = "SELECT ID FROM Usuario WHERE Correo = '".$co."'";
        $registros = $link->query($primer_sql);
        
        if($respuesta = $registros->fetch_array()){
            $userID = $respuesta['ID']; //Guarda el ID del usuario consultado

            $sql_dos = "SELECT P.Pregunta
                        FROM Respuestas R
                        JOIN Preguntas P ON R.ID_primeraPregunta = P.ID
                        WHERE R.ID_Usuario = $userID
                        UNION
                        SELECT P.Pregunta
                        FROM Respuestas R
                        JOIN Preguntas P ON R.ID_segundaPregunta = P.ID
                        WHERE R.ID_Usuario = $userID
                        UNION
                        SELECT P.Pregunta
                        FROM Respuestas R
                        JOIN Preguntas P ON R.ID_terceraPregunta = P.ID
                        WHERE R.ID_Usuario = $userID";
            $result = $link->query($sql_dos);
            
            while($row = $result->fetch_assoc()){//Es un array asociativo
                $preguntas[] = $row['Pregunta'];//Se asocia el campo de Pregunta de la tabla Preguntas
            }
        } else {
            //Alerta de que no existe un usuario con ese correo
        }
    }
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
    <title>Preguntas de Seguridad</title>
    <script>
        function convertirAMayusculas(input) {
            input.value = input.value.toUpperCase();
        }
    </script>
</head>
<body>
    <div class="contenedorComun">
        <div class = "logotipo">
            <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
            <h1 class="titulo_logotipo">Zoologics</h1>
        </div>
        <div class = "cont">
            <div class = "superior">
                <h1 class = "titEncabezado">Preguntas de Seguridad</h1>
            </div>
            <div class = "inferior">
                <p class = "aux">
                    No dudamos de que seas tú, pero queremos estar seguros. Por favor responde
                    las siguientes preguntas de seguridad:
                </p>
                <form action="Preguntas.php" method="POST" class="formularioPre">
                    <?php
                        //Se van a mostrar las respectivas preguntas asociadas a cada usuario
                        for ($i = 0; $i < count($preguntas); $i++) { 
                            echo '<div class="pregunta">';
                            echo '<label class="form-label">Pregunta '.($i + 1).': '.$preguntas[$i].'</label>';
                            echo '<input type="text" class="form-control" name="txtPregunta['.$i.']" required oninput="convertirAMayusculas(this)">';
                            echo '</div>';
                        }
                    ?>
                    <input type="submit" value="Validar" id="btnValidar" name="btnValidar">
                </form>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <?php
        if(isset($_POST['btnValidar'])){
            $respuestas = $_POST['txtPregunta'];
            $pre_uno = $respuestas[0];
            $pre_dos = $respuestas[1];
            $pre_tres = $respuestas[2];

            $consulta = "SELECT R.ID_Usuario, U.ID FROM Respuestas R 
                JOIN Usuario U ON R.ID_Usuario = U.ID 
                WHERE R.Respuesta_uno = '$pre_uno' 
                AND R.Respuesta_dos = '$pre_dos' 
                AND R.Respuesta_tres = '$pre_tres'";

            $queryusuario = mysqli_query($link, $consulta);
            $nr = mysqli_num_rows($queryusuario);

            if($nr > 0){
                $row = mysqli_fetch_assoc($queryusuario);
                $idUsuario = $row['ID_Usuario'];

                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: '¡Las respuestas son correctas!',
                        width: 600,
                        padding: '2em',
                        icon: 'success',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'CambiarContraseña.php?ID=' + encodeURIComponent('$idUsuario');
                    }, 1500);
                </script>";
            }else{
                echo "<script type='text/javascript'>
                    Swal.fire({
                        title: 'ERROR!!',
                        text :'Las respuestas son incorrectas. Intente de nuevo.',
                        width: 600,
                        padding: '2em',
                        icon: 'error',
                        showConfirmButton: false,
                        timer: 1800
                    });
                    setTimeout(function() {
                        // Redirige o realiza otra acción después de cerrar la alerta
                        window.location.href = 'Preguntas.php';
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