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
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <title>Inicio</title>
</head>
<body>
    <div class="barra_superior">
        <img src="../../Imagenes/San Diego/Imagenes zoo/Chapultepec.jpg" alt="San Diego">
        <div class="cont">
            <div class="logo">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <img src="../../Imagenes/Iconos/TresLineasBlancas.png" alt="Barra desplegable">
        </div>
        <div class="cont_dos">
            <h1 class="titulo_imagen">Zoológico de Chapultepec</h1>
            <h3 class="apartado">
                Es considerado uno de los zoológicos mas visitados del mundo, al año recibe mas de 5.5 
                millones de visitantes.
            </h3>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DE CHAPULTEPEC</h2>
        <p class="parrafo">
            El Zoológico de Chapultepec es una de las instituciones recreativas más populares de la 
            Ciudad de México, tanto para los habitantes de esta como para los turistas nacionales y 
            extranjeros, es considerado un centro de integración social, familiar e intergeneracional 
            que forma parte de nuestra historia, por lo que puede considerarse como el Zoológico 
            Nacional.
        </p>
        <h2 class="titulos_contenido_uno">BIOMAS DISPONIBLES</h2>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Chapultepec/desierto.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Desierto</h3>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Chapultepec/pastizal.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Pastizales</h3>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Chapultepec/franja costera.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Franja Costera</h3>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Chapultepec/bosque tropical.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Bosque tropical</h3>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Chapultepec/bosque templado.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Bosque templado</h3>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Chapultepec/aviario.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Aviario</h3>
                </div>
            </div>
        </div>
    </div>
    <div class = "conservacion">
        <h2 class="titulos_contenido_dos">CONSERVACION DE ESPECIES</h2>
        <p class="parrafo">
            El Zoológico de Chapultepec está involucrado con diversos proyectos de conservación, 
            sobre todo en la reproducción en cautiverio de especies como el conejo de los volcanes, 
            lobo mexicano, ocelote, panda gigante, oso de antifaz, borrego cimarrón y ajolote de 
            Xochimilco, a través de métodos naturales y artificiales.
        </p>
        <p class="parrafo">
            Con este propósito en 1998 se estableció un laboratorio de fisiología reproductiva. 
            La colaboración de instituciones nacionales e internacionales es parte del trabajo 
            desarrollado por el Zoológico de Chapultepec para la conservación de fauna silvestre.
        </p>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres">ANIMALES MAS DESTACADOS</h2>
        <div class="foto">
            <img src="../../Imagenes/Chapultepec/Teporingo.jpg" alt="Teporingo" width="290px" height="290px">
            <a href="https://www.nationalgeographicla.com/animales/2020/04/teporingo-o-conejo-de-los-volcanes">Teporingo</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Chapultepec/ocelote.jpg" alt="Ocelote" width="290px" height="290px">
            <a href="https://colombia.inaturalist.org/taxa/41997-Leopardus-pardalis">Ocelote</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Chapultepec/cebra de grevy.jpg" alt="Cebra de Grevy" width="290px" height="290px">
            <a href="https://www.nationalgeographicla.com/animales/cebra-de-grevy">Cebra de Grevy</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Chapultepec/lobo mexicano.jpg" alt="Lobo mexicano" width="290px" height="290px">
            <a href="https://www.nationalgeographic.es/animales/lobo-mexicano">Lobo mexicano</a>
        </div>
    </div>
    <!--<a href="../../config/CerrarSesion.php">Cerrar sesión</a>-->

    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>