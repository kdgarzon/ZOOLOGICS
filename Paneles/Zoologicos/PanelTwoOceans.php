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

    $rol = isset($_SESSION['ID_Rol']) ? $_SESSION['ID_Rol'] : "";
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
    <link rel="stylesheet" href="../../Estilos/Paneles.css">
    <link rel="stylesheet" href="../../Estilos/PestañasZoo.css">
    <link rel="stylesheet" href="../../Estilos/estilos.css">
    <link rel="stylesheet" href="../../Estilos/Tablas.css">
    <title>Inicio</title>
</head>
<body>
    <?php
        if($rol != 12){
            include('../../config/headerZoo.php');
        }
    ?>
    <div class="barra_superior">
        <img src="../../Imagenes/San Diego/Imagenes zoo/Two oceans.jpg" alt="San Diego">
        <?php
            if($rol == 12){
                include('../../config/headerAuxiliar.php');
            }
        ?>
        <div class="cont_dos">
            <div class="uno">
                <h1 class="titulo_imagen" id="titAcuario">ACUARIO TWO OCEANS</h1>
            </div>
            <div class="dos">
                <h3 class="apartado">
                    El Acuario Two Oceans está diseñado para mostrar la diversidad de vida marina de la costa sudafricana
                </h3>
            </div>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ACUARIO TWO OCEANS</h2>
        <p class="parrafo">
            Este acuario tiene una fuerte ética de conservación, que proporciona apoyo para la 
            conservación de los tiburones, la rehabilitación de los pingüinos y tortugas y ayuda 
            a liberar a las focas que a veces se quedan enredadas en tiras de plástico e hilos de 
            pesca.
        </p>
        <h2 class="titulos_contenido_uno" id="actAcuario">ACTIVIDADES DISPONIBLES</h2>
        <p class="parrafo">
            Los visitantes pueden pasar felizmente una tarde explorando el espectáculo de primera 
            clase, que entre ellos se encuentra una gran pecera de depredadores con tiburones 
            mellados (o ragged-tooth), un bosque de algas marinas (uno de los únicos tres que 
            quedan en el mundo), las galerías de los océanos Índico y Atlántico y una pantalla de 
            litoral que alberga pingüinos africanos y saltadores.
        </p>
        <p class="parrafo">
            Los visitantes también pueden organizar una sesión de buceo con los tiburones mellados 
            en la Exposición de depredadores o en la de Bosque de Algas marinas, por lo que debe 
            informar a sus clientes que necesitan una licencia de buceo para esta actividad.
        </p>
        <p class="parrafo">
            Los clientes también pueden cenar con tranquilidad en el restaurante adyacente, the 
            Shoreline Café, que sirve sólo productos del mar sostenibles y que, en consecuencia, 
            fue el primer restaurante de África que recibió el certificado del Consejo de 
            Administración Marino (Marine Stewardship Council).
        </p>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Two Oceans/card1.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Exposición de depredadores</h3>
                    <p class="txt">
                        Rompe tus ideas erróneas sobre los tiburones en la exhibición de tiburones de la 
                        Fundación Save Our Seas , conoce a los tiburones camuflados de la exhibición del 
                        bosque de algas y descubre los pequeños tiburones y sus huevos.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Two Oceans/card2.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Bosque de Algas marinas</h3>
                    <p class="txt">
                        Hay aproximadamente 30 especies de algas en todo el mundo, y los bosques de algas 
                        cubren aproximadamente el 25% de las costas del mundo.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres" id="actAcuario">ANIMALES MAS DESTACADOS</h2>
        <div class="fotos">
            <div class="foto">
                <img src="../../Imagenes/Two Oceans/morenas.jpeg" alt="Morenas" width="290px" height="290px">
                <a href="https://www.aquarium.co.za/animals/moray-eels">Morenas</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Two Oceans/Pulpos.jpg" alt="Pulpos" width="290px" height="290px">
                <a href="https://www.aquarium.co.za/animals/octopus">Pulpos</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Two Oceans/Tortugas.jpg" alt="Tortugas" width="290px" height="290px">
                <a href="https://www.aquarium.co.za/animals/turtles">Tortugas</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Two Oceans/Medusas.jpg" alt="Medusas" width="290px" height="290px">
                <a href="https://www.aquarium.co.za/animals/jellyfish">Medusas</a>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>