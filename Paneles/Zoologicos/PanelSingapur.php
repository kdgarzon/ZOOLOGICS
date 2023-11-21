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
        <img src="../../Imagenes/San Diego/Imagenes zoo/2.jpg" alt="San Diego">
        <div class="cont">
            <div class="logo">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <img src="../../Imagenes/Iconos/TresLineasBlancas.png" alt="Barra desplegable">
        </div>
        <div class="cont_dos">
            <h1 class="titulo_imagen">Zoológico de Singapur</h1>
            <h3 class="apartado">
                El zoo, que ocupa una extensión de 26 hectáreas, alberga a 2.800 animales de 300 especies.
            </h3>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DE SINGAPUR</h2>
        <p class="parrafo">
            El Singapore Zoo (Zoológico de Singapur) es uno de los principales jardines zoológicos 
            del mundo, elegido varias veces como mejor zoológico de Asia. Se encuentra localizado 
            en el norte de Singapur, en el medio de una reserva natural, en un entorno de selva 
            tropical.
        </p>
        <h2 class="titulos_contenido_uno">ACTIVIDADES DISPONIBLES</h2>
        <p class="parrafo">
            El zoo, que ocupa una extensión de 26 hectáreas, alberga a 2.800 animales de 300 
            especies. Tiene varios kilómetros de senderos asfaltados que permite ver de cerca 
            todas las especies, de los osos polares a los orangutanes. Para desplazarse por la 
            gran extensión del parque se puede usar un tren eléctrico que no está incluído en el 
            precio de la entrada (por un precio fijo, se puede subir y bajar del tren durante todo 
            el día; es una ayuda para personas con movilidad reducida o en días de mucho calor).
        </p>
        <p class="parrafo">
            Hay varios recintos espectaculares, tanto por su tamaño como por su diseño. Entre los 
            imperdibles se encuentran:
        </p>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Singapur/Card1.jpg" alt="Tarjeta 1" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Gran Valle del Rift en Etiopía</h3>
                    <p class="txt">
                        Una reproducción del territorio que habitan los babuinos en África del Este. En el 
                        recinto viven 90 babuinos y varias cabras. Es uno de los recintos del zoo en el que 
                        uno se puede pasar las horas divirtiéndose viendo las evoluciones continuas 
                        de los monos. 
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Singapur/Card2.jpg" alt="Tarjeta 2" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Orangutanes sueltos</h3>
                    <p class="txt">
                        Los oranguntanes son el símbolo del zoo de Singapur que, por su parte, les dedica 
                        una gran espacio abierto único en el mundo. El visitante puede ver los orangutanes 
                        en tierra, en su gran recinto, o saltando de un árbol a otro por encima de sus cabezas.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Singapur/Card3.jpg" alt="Tarjeta 3" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Tundra helada</h3>
                    <p class="txt">
                        El habitante más hermoso del recinto de la tundra helada es el oso polar. Vale la pena 
                        hacer coincidir la visita al recinto con el horario de alimentación del animal, que es 
                        cuando está más activo y será posible quedarse fascinado viéndole nadar en el tanque 
                        de agua.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "conservacion">
        <h2 class="titulos_contenido_dos">CONSERVACION DE ESPECIES</h2>
        <div class="esquema">
            <div class="granImagen">
                <img src="../../Imagenes/Singapur/opcional.jpg" alt="Imagen principal" height="682px" width="494px">
            </div>
            <div class="circulos">
                <div class = "circulo_tarjeta">
                    <div class="cirImg">
                        <img src="../../Imagenes/Singapur/cuidar vida silvestre.jpg" alt="Vida Silvestre" height="216px" width="216px">
                    </div>
                    <div class="cirText">
                        <h4 class="cirTitulo">Cuidando la vida silvestre</h4>
                        <p class="tecirculo">
                            Estamos comprometidos a brindar el más alto nivel de atención no solo a nuestros 
                            animales sino también a la vida silvestre rescatada.
                        </p>
                    </div>
                </div>
                <div class = "circulo_tarjeta">
                    <div class="cirImg">
                        <img src="../../Imagenes/Singapur/salvar animales.jpeg" alt="Salvar animales" height="216px" width="216px">
                    </div>
                    <div class="cirText">
                        <h4 class="cirTitulo">Salvando animales salvajes</h4>
                        <p class="tecirculo">
                            Nosotros, junto con socios con ideas afines, cumplimos nuestras prioridades de 
                            conservación para un planeta más saludable y un futuro sostenible para todos.
                        </p>
                    </div>
                </div>
                <div class = "circulo_tarjeta">
                    <div class="cirImg">
                        <img src="../../Imagenes/Singapur/vivir conscientemente.jpg" alt="Vivir" height="216px" width="216px">
                    </div>
                    <div class="cirText">
                        <h4 class="cirTitulo">Vivir conscientemente</h4>
                        <p class="tecirculo">
                            Realizamos un seguimiento de las emisiones de carbono y exploramos formas óptimas 
                            de compensar el carbono que producimos.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres">ANIMALES MAS DESTACADOS</h2>
        <div class="foto">
            <img src="../../Imagenes/Singapur/Suricata.jpg" alt="Suricata" width="290px" height="290px">
            <a href="https://www.bioparcvalencia.es/animal/sabana-africana/suricata/">Suricata</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Singapur/Jirafa.jpg" alt="Jirafa" width="290px" height="290px">
            <a href="https://www.mandai.com/en/singapore-zoo/animals-and-zones/giraffe.html">Jirafa</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Singapur/Pato Silbador.jpg" alt="Pato silbador" width="290px" height="290px">
            <a href="https://www.zoobioparqueamaru.com/nuestros-animales/animal.php?Id_Animal=31-patos-silbadores:-canelo-y-ventrinegro&Grupo=aves">Pato silbador</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Singapur/titi leon.jpg" alt="Tití León" width="290px" height="290px">
            <a href="https://apespain.org/conoce-al-titi-leon-de-cabeza-dorada/">Tití León</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Singapur/dragon barbudo.jpg" alt="Dragon Barbudo" width="290px" height="290px">
            <a href="https://www.zooplus.es/magazine/reptiles/especies-de-reptiles/dragon-barbudo-pogona">Dragon Barbudo</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Singapur/rana teñir.jpg" alt="Rana Teñir" width="290px" height="290px">
            <a href="https://www.expertoanimal.com/ranas/rana-flecha-azul.html">Rana Teñir</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Singapur/Guepardo.jpg" alt="Guepardo" width="290px" height="290px">
            <a href="https://www.mandai.com/en/singapore-zoo/animals-and-zones/cheetah.html">Guepardo</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Singapur/Geco azul.jpg" alt="Geco Azul" width="290px" height="290px">
            <a href="https://www.mandai.com/en/singapore-zoo/animals-and-zones/cheetah.html">Geco Azul</a>
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