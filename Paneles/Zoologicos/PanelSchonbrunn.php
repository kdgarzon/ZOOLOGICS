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
        <img src="../../Imagenes/San Diego/Imagenes zoo/Schonbrunn.jpg" alt="San Diego">
        <div class="cont">
            <div class="logo">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <img src="../../Imagenes/Iconos/TresLineasBlancas.png" alt="Barra desplegable">
        </div>
        <div class="cont_dos">
            <h1 class="titulo_imagen">Zoológico de Schonbrunn</h1>
            <h3 class="apartado">
                Distribuidos en un sitio de 17 hectáreas, los visitantes pueden ver 700 especies 
                diferentes, algunas de ellas en peligro de extinción.
            </h3>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DE SCHONBRUNN</h2>
        <p class="parrafo">
            El zoológico de Schönbrunn es el zoológico más antiguo del mundo y ha sido nombrado 
            seis veces seguidas el mejor zoológico de Europa . Parte del sitio del Patrimonio 
            Cultural Mundial de la UNESCO con la residencia imperial de verano del Palacio de 
            Schönbrunn en su centro, ofrece una combinación única de cultura y naturaleza, al 
            tiempo que promueve la conservación y la biodiversidad. El atractivo especial del 
            zoológico proviene de su encanto imperial.
        </p>
        <h2 class="titulos_contenido_uno">ACTIVIDADES DISPONIBLES</h2>
        <p class="parrafo">
            Más allá de la educación, la recreación y la investigación, la conservación de la 
            naturaleza y la protección de las especies se encuentran entre las principales 
            misiones de un zoológico gestionado científicamente. Por eso el zoológico de 
            Schönbrunn participa en proyectos de conservación de la naturaleza. El zoológico 
            proporciona financiación, participa en programas de cría en cautiverio, realiza 
            trabajos de relaciones públicas, aporta experiencia y apoya activamente los esfuerzos 
            de investigación. Esto ha significado un compromiso a largo plazo con numerosos 
            proyectos. Varios proyectos se llevan a cabo en países lejanos, otros están anclados 
            en Austria.
        </p>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Schonbrunn/card1.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Experiencia Matutina</h3>
                    <p class="txt">
                        Schönbrunn le abrirá sus puertas exclusivamente a primera hora de la mañana para 
                        que tenga prácticamente todo el lugar para usted. Este recorrido lo llevará a ver a 
                        sus animales favoritos y le brindará una visión poco común detrás de escena de la 
                        selva tropical o la casa del acuario.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Schonbrunn/card2.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Visitas temáticas</h3>
                    <p class="txt">
                        Temas sugeridos: Tour Destacado, Gigantes, Al Borde de la Extinción, Los Bebés y sus 
                        Madres, Safari en África, Nuestros Parientes en el Zoológico – los Grandes Simios
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Schonbrunn/card3.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Visitas entre bastidores</h3>
                    <p class="txt">
                        ¿Cómo creamos un clima tropical en la casa de la selva tropical? ¿Cómo se crían los 
                        calamares? En este recorrido tras bastidores, puede elegir entre la casa del terrario 
                        del acuario, el Polarium y la casa de la selva tropical, donde podrá ver lo que hay 
                        detrás de escena.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "conservacion">
        <h2 class="titulos_contenido_dos">CONSERVACION DE ESPECIES</h2>
        <div class = "circulo_tarjeta">
            <div class="cirImg">
                <img src="../../Imagenes/Schonbrunn/cria.jpg" alt="Islas del pacifico" height="216px" width="216px">
            </div>
            <div class="cirText">
                <h4 class="cirTitulo">Cría en cautividad</h4>
                <p class="tecirculo">
                    Estamos comprometidos a brindar el más alto nivel de atención no solo a nuestros 
                    animales sino también a la vida silvestre rescatada.
                </p>
            </div>
        </div>
        <div class = "circulo_tarjeta">
            <div class="cirImg">
                <img src="../../Imagenes/Schonbrunn/proteccion.jpg" alt="Sur oeste" height="216px" width="216px">
            </div>
            <div class="cirText">
                <h4 class="cirTitulo">Protección de especies</h4>
                <p class="tecirculo">
                    La protección de especies se encuentra entre las principales misiones de un zoológico 
                    gestionado científicamente. Por eso el zoológico, participa en proyectos de 
                    conservación de la naturaleza.
                </p>
            </div>
        </div>
        <div class = "circulo_tarjeta">
            <div class="cirImg">
                <img src="../../Imagenes/Schonbrunn/Investigacion.jpg" alt="Amazonia" height="216px" width="216px">
            </div>
            <div class="cirText">
                <h4 class="cirTitulo">Proyectos de investigación</h4>
                <p class="tecirculo">
                    Contribuye en el bienestar animal, la conservación de la naturaleza y la protección 
                    de las especies. Nos esforzamos por contribuir al aumento del conocimiento científico 
                    en estos campos.
                </p>
            </div>
        </div>
        <img src="../../Imagenes/Schonbrunn/opcional.jpg" alt="">
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres">ANIMALES MAS DESTACADOS</h2>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/panda gigante.jpg" alt="Panda Gigante" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/giant-panda-needs-our-help/">Panda Gigante</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/ibis calvo.jpg" alt="Ibis calvo" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/bald-ibis-species-protection-project/">Ibis calvo</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/batagur.jpg" alt="Batagur" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/batagur-river-terrapin-species-protection-project/">Batagur</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/danta.jpg" alt="Danta" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/brazilian-tapir-species-protection-project/">Danta</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/quebrantahuesos.jpg" alt="Quebrantahuesos" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/bearded-vulture-species-protection-project/">Quebrantahuesos</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/alimoche.jpg" alt="Alimoche" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/egyptian-vulture-species-protection-program/">Alimoche</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/codorniz.jpg" alt="Codorniz" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/corncrake-species-protection-project/">Codorniz</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Schonbrunn/salamandra.jpg" alt="Salamandra" width="290px" height="290px">
            <a href="https://www.zoovienna.at/en/natur-und-artenschutz/salamander-species-protection-project/">Salamandra</a>
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