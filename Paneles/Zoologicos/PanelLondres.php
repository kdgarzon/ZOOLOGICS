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
        <img src="../../Imagenes/San Diego/Imagenes zoo/Londres.jpg" alt="San Diego">
        <?php
            if($rol == 12){
                include('../../config/headerAuxiliar.php');
            }
        ?>
        <div class="cont_dos">
            <div class="uno">
                <h1 class="titulo_imagen" id="titLondres">ZOOLOGICO DE LONDRES</h1>
            </div>
            <div class="dos">
                <h3 class="apartado">
                    Fundado hace casi 200 años, el Zoológico de Londres fue el primer zoológico 
                    científico del mundo. 
                </h3>
            </div>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DE LONDRES</h2>
        <p class="parrafo">
            Cuando visitas el Zoológico de Londres, estás haciendo grandes cosas en tu gran día. 
            Somos más que un simple zoológico: somos parte de la ZSL (Sociedad Zoológica de 
            Londres), una organización benéfica mundial para la conservación de la vida silvestre. 
            Nuestros equipos de conservacionistas, científicos, técnicos y especialistas 
            comunitarios están activos en más de 70 países, y cada visita al Zoológico de Londres 
            ayuda a financiar su trabajo vital para restaurar hábitats y proteger la vida silvestre.
        </p>
        <p class="parrafo">
            También llevamos a cabo un trabajo de conservación crucial aquí en nuestros zoológicos, 
            desde la reintroducción de los caracoles más pequeños hasta la cría y el cuidado de 
            los tigres de Sumatra en peligro crítico de extinción , pasando por el avance del 
            conocimiento para ayudar con la conservación global en el campo, que incluye la 
            protección de los rinocerontes salvajes en África . Restaurar ecosistemas de manglares 
            en Asia y reintroducir lirones en el Reino Unido .
        </p>
        <h2 class="titulos_contenido_uno" id="actLondres">ACTIVIDADES DISPONIBLES</h2>
        <p class="parrafo">
            Asegúrate de visitar La vida secreta de los reptiles y anfibios cuando se abra a 
            finales de 2023 para ver las singulares ranas gallinas de montaña y descubrir cómo 
            salvamos a su especie de la extinción total. Cuando se descubrió que había habido un 
            colapso en la única población del mundo de estas majestuosas ranas en su hábitat 
            insular, transportamos por aire a los últimos animales supervivientes a un lugar 
            seguro antes de que se extinguieran.
        </p>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Londres/Card1.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Pabellón de Blackburn</h3>
                    <p class="txt">
                        Blackburn Pavilion, una parte importante del patrimonio del Zoológico de Londres, 
                        ofrece un tranquilo hogar tropical para más de 50 especies diferentes de aves.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Londres/Card2.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Paraíso de mariposas</h3>
                    <p class="txt">
                        Caminando a través de una oruga gigante, sumérgete en un mundo de asombrosas y hermosas 
                        mariposas y polillas de todo el mundo. Piérdete en la rica variedad de especies que 
                        revolotean delicadamente a tu alrededor, buscando plantas para alimentarse y descansar.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Londres/Card3.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Casa del dragón de komodo</h3>
                    <p class="txt">
                        Ven y enfréntate cara a cara con nuestro dragón merodeando por su guarida de última 
                        generación y disfruta de vistas panorámicas a través de una extensión ininterrumpida 
                        de más de 20 metros de cristal a prueba de dragones.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Londres/Card4.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Playa pinguino</h3>
                    <p class="txt">
                        Penguin Beach cuenta con una gran piscina con impresionantes áreas de observación 
                        submarina para que puedas ver cómo nuestros amigos con aletas vuelan bajo el agua. 
                        La piscina de 1.200 metros cuadrados tiene capacidad para 450.000 litros de agua.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Londres/Card5.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Casa reptil</h3>
                    <p class="txt">
                        Construida en 1926, nuestra Casa de Reptiles ha contribuido a la comprensión del mundo 
                        natural durante casi cien años. Hoy estamos trabajando con especies en peligro de 
                        extinción de todo el mundo, desde cocodrilos filipinos y salamandras gigantes chinas.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Londres/Card6.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Tierra de los leones</h3>
                    <p class="txt">
                        La Tierra de los Leones fue inaugurada oficialmente por Su Majestad la Reina Isabel II 
                        y Su Alteza Real el Príncipe Felipe, Duque de Edimburgo , en marzo de 2016. Ha sido d
                        iseñada para informar, inspirar y entusiasmar a los amantes de la vida silvestre de 
                        todas las edades. 
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "conservacion" id="conserLondres">
        <h2 class="titulos_contenido_dos" id="actLondres">PRIORIDADES DE CONSERVACION DE ESPECIES</h2>
        <div class="tarjetas">
            <div class = "circulo_tarjeta">
                <div class="cirImg" id="cirLondres">
                    <img src="../../Imagenes/Londres/proteger.jpg" alt="proteger" height="216px" width="216px">
                </div>
                <div class="cirText" id="texLondres">
                    <h4 class="cirTitulo">Protegiendo especies</h4>
                    <p class="tecirculo" id="tamañoLondres">
                        El cambio climático y la actividad humana están llevando a las especies al borde de la 
                        extinción. Cada pérdida potencial es vital en la lucha por proteger las especies, y el 
                        tiempo se acaba rápidamente.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg" id="cirLondres">
                    <img src="../../Imagenes/Londres/restaurar ecosistemas.jpg" alt="restaurar ecosistemas" height="216px" width="216px">
                </div>
                <div class="cirText" id="texLondres">
                    <h4 class="cirTitulo">Restaurando ecosistemas</h4>
                    <p class="tecirculo" id="tamañoLondres">
                        Desde la contaminación hasta el cambio climático, la presión sobre nuestro planeta 
                        está aumentando. Ahora, más que nunca, la naturaleza necesita nuestro apoyo.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg" id="cirLondres">
                    <img src="../../Imagenes/Londres/vivir vida salvaje.jpg" alt="vivir vida salvaje" height="216px" width="216px">
                </div>
                <div class="cirText" id="texLondres">
                    <h4 class="cirTitulo">Viviendo con la vida silvestre</h4>
                    <p class="tecirculo" id="tamañoLondres">
                        Al trabajar con el entorno en constante evolución, cambio y respiración que nos rodea 
                        y responder a él, podemos crear un mundo más equilibrado.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg" id="cirLondres">
                    <img src="../../Imagenes/Londres/cambio isnpirador.jpg" alt="cambio isnpirador" height="216px" width="216px">
                </div>
                <div class="cirText" id="texLondres">
                    <h4 class="cirTitulo">Cambio inspirador</h4>
                    <p class="tecirculo" id="tamañoLondres">
                        Acercamos a las personas a la naturaleza, inspirándolas a apreciar y cuidar la vida 
                        silvestre, trabajando con comunidades para aumentar la comprensión y el apoyo a las 
                        acciones necesarias.
                    </p>
                </div>
            </div>
        </div>  
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres" id="actLondres">ANIMALES MAS DESTACADOS</h2>
        <div class="fotos">
            <div class="foto">
                <img src="../../Imagenes/Londres/pangolin.jpg" alt="Pangolin" width="290px" height="290px">
                <a href="https://www.zsl.org/what-we-do/species/pangolins">Pangolin</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Londres/paloma rosada.jpg" alt="Paloma rosada" width="290px" height="290px">
                <a href="https://www.zsl.org/what-we-do/projects/pink-pigeon-conservation">Paloma rosada</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Londres/camello salvaje.jpg" alt="Camello salvaje" width="290px" height="290px">
                <a href="https://www.zsl.org/what-we-do/projects/conservation-of-mongolias-wild-camels">Camello salvaje</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Londres/liron avellada.jpg" alt="Lirón avellana" width="290px" height="290px">
                <a href="https://www.zsl.org/what-we-do/species/hazel-dormouse">Lirón avellana</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Londres/sihek.jpg" alt="Sihek" width="290px" height="290px">
                <a href="https://www.zsl.org/what-we-do/projects/sihek-conservation">Sihek</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Londres/caracol partula.jpg" alt="Caracol partula" width="290px" height="290px">
                <a href="https://www.zsl.org/what-we-do/projects/partula-snail-conservation">Caracol partula</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Londres/alpaca.jpg" alt="Alpaca" width="290px" height="290px">
                <a href="https://www.zsl.org/what-we-do/projects/partula-snail-conservation">Alpaca</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Londres/ayeAye.jpg" alt="AyeAyes" width="290px" height="290px">
                <a href="https://www.londonzoo.org/whats-here/animals/aye-aye">AyeAyes</a>
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