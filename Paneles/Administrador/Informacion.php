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

    $rol = (isset($_GET['ID_Rol'])?$_GET['ID_Rol']:"");
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
    <link rel="stylesheet" href="../../Estilos/estilos.css">
    <title>Información</title>
</head>
<body>
    <?php include '../../config/header.php';?>
    <div class="general">
        <h1 class="tituloInicial">INFORMACION GENERAL</h1>
        <hr class="lineaTitulo">
        <div class="PrimerZoo">
            <div class="vista">
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/San Diego.jpg" alt="" width="605px" height="333px">
                </div>
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="SanDiego">Zoológico de San Diego</h2>
                    <p class="texto" id="derecho">
                        El zoo de San Diego es uno de los zoológicos más importantes de Estados Unidos
                        y de todo el mundo. Situado en San Diego, California, fue creado en 1915 y cuenta
                        con unos 4000 ejemplares de más de 800 especies distintas. Es uno de los pocos zoos 
                        que tuvo en su momento un Panda gigante. En este sitio se grabó el primer video de YouTube.
                    </p>
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Este zoológico cuida a más de 3.700 animales y 700.000 plantas exóticas a lo 
                        largo de 40 hectáreas de terreno.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        Fundado por el Dr. Harry Wegeforth, quien estableció la Sociedad Zoológica 
                        de San Diego el 2 de Octubre de 1916.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        Esta ubicado en San Diego California.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="SegundoZoo">
            <div class="vista">
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="Singapur">Zoológico de Singapur</h2>
                    <p class="texto" id="izquierdo">
                        Es un jardín zoológico que ocupa 28 hectáreas en los margenes superiores del Embalse Seletar 
                        dentro de la muy boscosa cuenca central de Singapur. El zoológico fue construido a un costo 
                        de 9 millones de dólares desembolsados por el gobierno de Singapur y se abrió el 27 de Junio 
                        de 1973. El zoológico de Singapur está compuesto de cuatro recintos:
                    </p>
                </div>
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Singapur.jpg" alt="" width="605px" height="333px">
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Zoológico general: con 300 especies de mamíferos, reptiles y aves.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        River Safari: alberga peces y animales marinos. Es el único parque de animales 
                        acuáticos en toda Asia.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        Night Safari: el primer parque de vida silvestre del mundo en el que conocerás 
                        animales que están activos durante la noche.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>4</h1>
                    </div>
                    <p class="texto">
                        Parque de aves: el más grande de Asia.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="Tercerzoo">
            <div class="vista">
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Toronto.jpg" alt="" width="605px" height="333px">
                </div>
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="SanDiego">Zoológico de Toronto</h2>
                    <p class="texto" id="derecho">
                        Es un jardín zoológico localizado en el distrito de Scarborough en Toronto, Cánada. Fue 
                        inaugurado el 15 de Agosto de 1974 como Zoológico Metropolitano de Toronto y es una propiedad 
                        de la ciudad de Toronto. El zoológico está localizado próximo al río Rouge en la parte noroeste 
                        de la ciudad. 
                    </p>
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Es el zoológico más grande de Cánada.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        Se divide en siete regiones zoogeográficas: Indo-Malaya, África, América, 
                        Tundra Trek, Australasia, Eurasia y el dominio canadiense.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        Actualmente es el hogar de más de 5000 animales (incluidos invertebrados y peces) 
                        que representan más de 500 especies.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="CuartoZoo">
            <div class="vista">
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="Singapur">Zoológico Loro Parque</h2>
                    <p class="texto" id="izquierdo">
                        El Loro Parque fue creado en 1970 por los alemanes Wolfgang Kiessling y su 
                        padre. El 17 de Diciembre de 1972 el parque abrió oficialmente sus puertas al público. 
                        En sus inicios disponía de una superficie de unos 13.000 m2 en las que se reproducía el 
                        hábitad natural de los animales, más de 150 papagayos y el primer espectáculo de loros de Europa.
                    </p>
                </div>
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Loro Parque.jpg" alt="" width="605px" height="333px">
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Ha sido reconocido dos años consecutivos como Mejor Zoológico del Mundo 
                        por TripAdvisor.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        Es un zoológico y una colección de plantas tropicales situado en Puerto de 
                        la Cruz, España.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        El Grupo Loro Parque es también una empresa que gestiona algunos de los más 
                        importantes parques temáticos de Canarias, tales como el Siam Park y el Acuario 
                        Poema del Mar.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>4</h1>
                    </div>
                    <p class="texto">
                        El parque tiene desde 1984 el primer espectáculo de papagayos en vuelo libre de Europa.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="QuintoZoo">
            <div class="vista">
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Schonbrunn.jpg" alt="" width="605px" height="333px">
                </div>
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="SanDiego">Zoológico de Schonbrunn</h2>
                    <p class="texto" id="derecho">
                        Es un jardín zoológico ubicado en los terrenos del famoso Palacio de Schonbrunn en Viena. 
                        Fundado como una casa de fieras imperial en 1752, es el zoológico más antiguo del mundo. 
                        Tiene como su principal objetivo ser un centro para la conservación de las especies y la 
                        conservación de la naturaleza en general.
                    </p>
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Alberga 700 especies de animales que van desde tigres siberianos hasta rinocerontes.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        En el año de 1906 paso algo increible por primera vez en toda la historia de Viena, 
                        nació un elefante africano criado en cautividad.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        En 2007 ocurrió una novedad mundial, nació el primer bebe panda en Schonbrunn el cual 
                        fue bautizado como Fu Long.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="SextoZoo">
            <div class="vista">
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="Singapur">Zoológico de Londres</h2>
                    <p class="texto" id="izquierdo">
                        El zoológico de Londres, en Regent's Park, es un espacio de 15 hectáreas en las que conviven 
                        más de 800 especies de animales. Actualmente hay más de 20.000 animales. Se fundó en 1828 y 
                        actualmente, es el zoológico científico en activo más antiguo del mundo y consigue atraer 
                        tanto a niños como a mayores, y también a aquellos que no son tan amantes de la fauna y la flora.
                    </p>
                </div>
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Londres.jpg" alt="" width="605px" height="333px">
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Existe un acuario en el zoológico desde 1853, siendo el primer acuario público del mundo.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        Este zoológico fue utilizado en la filmación de la película de Harry Potter 
                        y la Piedra Filosofal.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        El Zoológico de Londres alberga algunas obras de arquitectura bastante novedosas 
                        dentro del campo de la arquitectura para animales.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>4</h1>
                    </div>
                    <p class="texto">
                        El residente más famoso del zoológico fue el gato Arnie, que ayudaba a los trabajadores 
                        rescatando animales abandonados y atendiendo a los demás residentes del zoo.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="SeptimoZoo">
            <div class="vista">
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Berlin.jpg" alt="" width="605px" height="333px">
                </div>
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="SanDiego">Zoológico de Berlín</h2>
                    <p class="texto" id="derecho">
                        Es uno de los zoológicos más grandes de Alemania y con la mayor cantidad de 
                        especies animales en un zoológico en el mundo. Está ubicado en el antiguo distrito 
                        de Kurfurstendamm. Fue abierto el primero de Agosto de 1844, siendo el primer zoológico 
                        de Alemania. El acuario fue abierto en 1913.
                    </p>
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Es también el más visitado de toda Europa con 2.6 millones de visitantes en todo el mundo.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        Este zoo tiene osos pandas, que pueden ser vistos en muy pocos zoos en el mundo. Todos los 
                        animales son encerrados en un área diseñada para recrear su hábitad natural.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        Este zoo también es uno de los pocos que exhiben tuátaras y cálaos de cola rufa de Luzón. 
                        Tiene una función de mantenimiento para los rinocerontes blancos y negros.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="OctavoZoo">
            <div class="vista">
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="Singapur">Zoológico del Bronx</h2>
                    <p class="texto" id="izquierdo">
                        El zoológico del Bronx se encuentra dentro del Parque del Bronx, en el Bronx, en Nueva York. 
                        Está entre los más grandes zoológicos en el mundo, y es el más grande en América del Norte, 
                        con unos 6.000 animales que representan más o menos a 650 especies de alrededor de todo el 
                        mundo. Inaugurado el 8 de Noviembre de 1899, fue uno de los primeros en reducir el uso de las jaulas.
                    </p>
                </div>
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/bronx.jpg" alt="" width="605px" height="333px">
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Tiene un conservatorio interior de mariposas que permite a los visitantes caminar por los 
                        jardines y prados y ver las mariposas de cerca.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        El zoológico del Bronx fue noticia en Agosto de 2006 cuando se acordó acoger un cachorro de 
                        Leopardo de las Nieves, Leo, en su programa de cría.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        La Casa del Mono fue hogar de titi cabeciblancos, los sakís cariblanco, los titis 
                        neotropicales y otros monos del nuevo mundo.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>4</h1>
                    </div>
                    <p class="texto">
                        La exposición de Llanuras Africanas permite a los visitantes caminar por delante de los 
                        leones, las cigueñas y las cebras, a parte de ver las manadas de las gacelas compartiendo 
                        su hogar con los nyalas.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="NovenoZoo">
            <div class="vista">
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Chapultepec.jpg" alt="" width="605px" height="333px">
                </div>
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="SanDiego">Zoológico de Chapultepec</h2>
                    <p class="texto" id="derecho">
                        Fue inaugurado el 6 de Julio de 1923 por el biólogo mexicano Alfonso Luis Herrera. 
                        Terminó por convertirse en el zoológico más visitado en México, con más de 5 millones 
                        de visitantes anuales. Cuenta con un herpetario, un mariposario y un Museo del Elefante.
                    </p>
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Es el segundo zoológico más grande de México, después del zoológico de Guadalajara.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        Cuenta con siete áreas con condiciones climáticas y vegetales especiales: desierto, pastizales, 
                        franja costera, tundra, aviario, bosque templado y bosque tropical.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="verde">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        Fue un santuario donde los tlatoanis (emperadores aztecas) tenían su lugar de descanso con 
                        manantiales, zoológicos y áreas para bañarse.
                    </p>
                </div>
            </div>
        </div>
        <hr class="linea_divisora">
        <div class="DecimoZoo">
            <div class="vista">
                <div class="contenido-zoo">
                    <h2 class="subtitulo-zoo" id="Singapur">Acuario Two Oceans</h2>
                    <p class="texto" id="izquierdo">
                        Es un acuario situado en el Victoria & Alfred Waterfront en Ciudad del Cabo, en Sudáfrica. 
                        El acuario abrió sus puertas el 13 de Noviembre de 1995 y está compuesto por siete salas de 
                        exposición con grandes ventanas de exhibición. El encanto partícular de este zoológico se 
                        debe a su ubicación, donde el Océano Índico y el Océano Atlántico se encuentran.
                    </p>
                </div>
                <div class="imagen-zoo">
                    <img src="../../Imagenes/San Diego/Imagenes zoo/Two oceans.jpg" alt="" width="605px" height="333px">
                </div>
            </div>
            <div class="numeracion">
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>1</h1>
                    </div>
                    <p class="texto">
                        Se puede bucear con tiburones de dientes irregulares en el Acuario si se tiene un 
                        certificado PADI Open Water.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>2</h1>
                    </div>
                    <p class="texto">
                        Este acuario enfoca sus esfuerzos en conservación, ayudando a tiburones, pinguinos, 
                        tortugas y focas atrapadas en plástico y redes de pesca.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>3</h1>
                    </div>
                    <p class="texto">
                        Los visitantes pueden explorar la vida marina del sur de África, desde microorganismos 
                        hasta peces impresionantes, incluyendo pinguinos, tortugas, tiburones y peces coloridos.
                    </p>
                </div>
                <div class="numeral">
                    <div class="numero" id="amarillo">
                        <h1>4</h1>
                    </div>
                    <p class="texto">
                        La exposición de Llanuras Africanas permite a los visitantes caminar por delante de los 
                        leones, las cigueñas y las cebras, a parte de ver las manadas de las gacelas compartiendo 
                        su hogar con los nyalas.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <p>&copy;2023. Todos los derechos reservados. Elaborado por Karen Garzon :)</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>