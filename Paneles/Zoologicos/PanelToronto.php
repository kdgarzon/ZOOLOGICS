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
        <img src="../../Imagenes/San Diego/Imagenes zoo/3.jpeg" alt="San Diego">
        <div class="cont">
            <div class="logo">
                <img src="../../Imagenes/Iconos/tucan.png" alt="Logo" width="40px" height="40px" class="d-inline-block align-text-top">
                <h1 class="titulo_logotipo">Zoologics</h1>
            </div>
            <img src="../../Imagenes/Iconos/TresLineasBlancas.png" alt="Barra desplegable">
        </div>
        <div class="cont_dos">
            <h1 class="titulo_imagen">Zoológico de Toronto</h1>
            <h3 class="apartado">
                El zoológico está localizado próximo al río Rouge en la parte noroeste de la ciudad.
            </h3>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DE TORONTO</h2>
        <p class="parrafo">
            El Zoológico de Toronto es un jardín zoológico localizado en el distrito de Scarborough 
            en Toronto, Canadá. Fue inaugurado el 15 de agosto de 1974 como Zoológico Metropolitano 
            de Toronto y es una propiedad de la ciudad de Toronto; la palabra "Metropolitano" fue 
            retirada del nombre cuando las ciudades de la Municipalidad de la Región Metropolitana 
            de Toronto fueron reunidas para formar la ciudad de Toronto.
        </p>
        <h2 class="titulos_contenido_uno">ACTIVIDADES DISPONIBLES</h2>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Toronto/card1.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">PASEO CANGURO</h3>
                    <p class="txt">
                        Esto incluye áreas fuera del hábitat cuidadosamente diseñadas donde los canguros 
                        pueden retirarse a su gusto y desarrollar gradualmente la confianza y familiaridad 
                        de los canguros con los visitantes.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Toronto/card2.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">CURSO DE CUERDAS PARA ESCALAR</h3>
                    <p class="txt">
                        Los invitados y miembros podrán balancearse, gatear y mantener el equilibrio de forma 
                        segura mientras guían su propio camino a través de los 26 elementos de la subida de 
                        casi 33 pies de altura, ¡lo que resultará en una aventura diferente cada vez!
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Toronto/card3.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">ISLA DE CHAPOTEO</h3>
                    <p class="txt">
                        Con dos acres de diversión familiar práctica e ininterrumpida en medio de toboganes, 
                        animales que arrojan agua, cascadas y cubos que se inclinan, nuestra plataforma de 
                        chapoteo es la mejor manera de combatir el calor del verano.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Toronto/card4.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">TIROLESA WILD ROUGE</h3>
                    <p class="txt">
                        ¡El Wild Rouge Zipline es un parque de aventuras aéreas con temática ecológica! Los 
                        visitantes son transportados por una tirolina de alta velocidad de 300 m con cable 
                        paralelo hasta el corazón de la atracción.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Toronto/card5.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">CAMPAMENTO SERENGETI BUSH</h3>
                    <p class="txt">
                        Disfrute de actividades nocturnas, cuentos sobre fogatas y la oportunidad de dormir 
                        bajo las estrellas en nuestras auténticas tiendas de campaña africanas.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Toronto/card6.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">INVERNADERO</h3>
                    <p class="txt">
                        Cultivamos estas plantas para ramo, muebles y estética. La primera mitad del 
                        invernadero es principalmente para explorar nuestra colección de insectos aquí en 
                        el zoológico.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "conservacion">
        <img src="../../Imagenes/Toronto/opcional.jpg" alt="">
        <h2 class="titulos_contenido_dos">CONSERVACION DE ESPECIES</h2>
        <div class = "cajas">
            <h4 class="cirTitulo">África</h4>
        </div>
        <div class = "cajas">
            <h4 class="cirTitulo">América</h4>
        </div>
        <div class = "cajas">
            <h4 class="cirTitulo">Australasia</h4>
        </div>
        <div class = "cajas">
            <h4 class="cirTitulo">Dominio Canadiense</h4>
        </div>
        <div class = "cajas">
            <h4 class="cirTitulo">Zona de descubrimiento</h4>
        </div>
        <div class = "cajas">
            <h4 class="cirTitulo">Eurasia salvaje</h4>
        </div>
        <div class = "cajas">
            <h4 class="cirTitulo">Indo - Malaya</h4>
        </div>
        <div class = "cajas">
            <h4 class="cirTitulo">Caminata por la tundra</h4>
        </div>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres">ANIMALES MAS DESTACADOS</h2>
        <div class="foto">
            <img src="../../Imagenes/Toronto/ibis escarlata.jpg" alt="Ibis escarlata" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Scarlet%20ibis">Ibis escarlata</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Toronto/polluelo negro.jpg" alt="Polluelo negro" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Black%20Crake">Polluelo negro</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Toronto/mapache.jpg" alt="Mapache" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Raccoon">Mapache</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Toronto/halcon de harris.jpg" alt="Halcón de Harris" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Harris's%20hawk">Halcón de Harris</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Toronto/medusa luna.jpg" alt="Medusa Luna" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Moon%20jellyfish">Medusa Luna</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Toronto/panda rojo.jpg" alt="Panda rojo" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Red%20Panda">Panda rojo</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Toronto/pato mandarin.jpg" alt="Pato mandarin" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Mandarin%20duck">Pato mandarin</a>
        </div>
        <div class="foto">
            <img src="../../Imagenes/Toronto/caribu.jpg" alt="Caribú" width="290px" height="290px">
            <a href="https://www.torontozoo.com/animals/Caribou">Caribú</a>
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