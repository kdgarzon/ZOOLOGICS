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
        <img src="../../Imagenes/San Diego/Imagenes zoo/Berlin.jpg" alt="San Diego">
        <div class="cont">
            <div class="logo">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <img src="../../Imagenes/Iconos/TresLineasBlancas.png" alt="Barra desplegable">
        </div>
        <div class="cont_dos">
            <h1 class="titulo_imagen">Zoológico de Berlín</h1>
            <h3 class="apartado">
                No es solo el zoológico más antiguo y visitado de Alemania, sino también el que 
                cuenta con mayor número de especies en el mundo.
            </h3>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DE BERLIN</h2>
        <p class="parrafo">
            Dos elefantes tumbados de arenisca del Elba soportan dos pesadas columnas sobre las 
            que descansa un techo curvado, decorado con pinturas doradas de Asia Oriental y tallas 
            imaginativas: el Jardín Zoológico ya deja claro desde su entrada principal – la 
            Elefantentor (Puerta de los Elefantes) construida en 1899 – que es un lugar único. 
            Es realmente un zoo de superlativos: es el zoológico más antiguo de Alemania 
            (inaugurado en 1844) con alrededor de 20 000 animales de más de 1000 especies. 
            El Acuario de Berlín es uno de los acuarios más importante de Europa. El zoo tiene 
            además una casa de hipopótamos y uno de los aviarios más grandes y modernos de Europa.
        </p>
        <h2 class="titulos_contenido_uno">ACTIVIDADES DISPONIBLES</h2>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Berlin/card1.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">El mundo de las aves</h3>
                    <p class="txt">
                        El aviario más moderno de Europa.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Berlin/card2.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Casa de hipopótamos</h3>
                    <p class="txt">
                        Un paisaje fluvial africano.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "conservacion">
        <h2 class="titulos_contenido_dos">CARACTERISTICAS</h2>
        <p class="parrafo">
            Este zoo tiene osos pandas, que pueden ser vistos en muy pocos zoos en el mundo. 
            Todos los animales son encerrados en un área diseñada para recrear su hábitat natural. 
            Este zoo también es uno de los pocos que exhiben tuátaras y cálaos de cola rufa de 
            Luzón. Tiene una función de mantenimiento para los rinocerontes blancos y rinocerontes 
            negros y gaurs.
        </p>
        <p class="parrafo">
            Es también el más visitado de toda Europa con 2,6 millones de visitantes de todo el 
            mundo. Está abierto todo el año y se puede acceder a él fácilmente con el transporte 
            público.
        </p>
        <p class="parrafo">
            Los visitantes pueden también entrar por la exótica "Puerta de los Elefantes" al lado 
            del acuario en Budapester Straße o a través de la Puerta de los Leones en 
            Hardenbergplatz. Berlín tiene otro zoo, el Tierpark Berlin, que fue el zoo de Berlín 
            Este.
        </p>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres">ANIMALES MAS DESTACADOS</h2>
        <div class="foto">
            <img src="../../Imagenes/Berlin/leon marino.jpg" alt="León marino" width="290px" height="290px">
            <a href="https://es.wikipedia.org/wiki/Otariinae">León marino</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Berlin/orangutan.jpg" alt="Orangutanes" width="290px" height="290px">
            <a href="https://es.wikipedia.org/wiki/Pongo">Orangutanes</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Berlin/chimpance.jpg" alt="Chimpancé" width="290px" height="290px">
            <a href="https://www.nationalgeographic.es/animales/chimpance">Chimpancé</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Berlin/cabra.jpg" alt="Cabra" width="290px" height="290px">
            <a href="https://es.wikipedia.org/wiki/Capra_aegagrus_hircus">Cabra</a>
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