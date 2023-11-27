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
    <title>Inicio</title>
</head>
<body>
    <?php
        if($rol != 12){
            include('../../config/headerZoo.php');
        }
    ?>
    <div class="barra_superior">
        <img src="../../Imagenes/San Diego/Imagenes zoo/Loro Parque.jpg" alt="San Diego">
        <?php
            if($rol == 12){
                include('../../config/headerAuxiliar.php');
            }
        ?>
        <div class="cont_dos">
            <div class="uno">
                <h1 class="titulo_imagen" id="titLoroParque">ZOOLOGICO LORO PARQUE</h1>
            </div>
            <div class="dos">
                <h3 class="apartado">
                    Más 100 especies animales reintroducidas con éxitos desde zoológicos a la vida silvestre.
                </h3>
            </div>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO LORO PARQUE</h2>
        <p class="parrafo">
            El bienestar animal entendido de forma integral es nuestra máxima preocupación. 
            Cuidamos de los animales que habitan en nuestro parque desde el amor y el respeto. 
            Diseñamos planes específicos para cada especie y animal que está bajo nuestro cuidado, 
            y lo hacemos desde los hallazgos biológicos obtenidos en zoológicos modernos y 
            mediante la aplicación de los conocimientos veterinarios a la fauna silvestre.
        </p>
        <h2 class="titulos_contenido_uno" id="LoroParqueAct">PRINCIPIOS LORO PARQUE</h2>
        <div class="numerales">
            <div class="numeral">
                <div class="numero">
                    <h1 class="num">1</h1>
                </div>
                <p>Libertad de alimentación e hidratación</p>
            </div>
            <div class="numeral">
                <div class="numero">
                    <h1 class="num">2</h1>
                </div>
                <p>Libertad de ambiente apropiado</p>
            </div>
            <div class="numeral">
                <div class="numero">
                    <h1 class="num">3</h1>
                </div>
                <p>Libertad de buena salud</p>
            </div>
            <div class="numeral">
                <div class="numero">
                    <h1 class="num">4</h1>
                </div>
                <p>Libertad de bienestar emocional</p>
            </div>
            <div class="numeral">
                <div class="numero">
                    <h1 class="num">5</h1>
                </div>
                <p>Libertad para expresar su comportamiento natural</p>
            </div>
        </div>
        <h2 class="titulos_contenido_uno" id="LoroParqueAct">ACTIVIDADES DISPONIBLES</h2>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Loro parque/card1.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Planet Penguin</h3>
                    <p class="txt">
                        Descubre la Antártida y siente el clima polar en el mejor pingüinario del mundo. 
                        Nieve de verdad, un enorme iceberg y cientos de pingüinos te esperan en este hábitat 
                        de hielo.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Loro parque/card2.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Katandra Treetops</h3>
                    <p class="txt">
                        Entre puentes colgantes y abundante vegetación, podrás encontrarte cara a cara con 
                        los loris arcoíris o sentir el aire que desplazan las acrobacias aéreas de una gran 
                        variedad de aves de Australasia.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Loro parque/card3.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Oceanía</h3>
                    <p class="txt">
                        La innovadora exhibición permite ver a las aves de forma directa sin barreras 
                        visuales. Visita un espacio donde una gran variedad de especies de Oceanía muestra 
                        su máximo esplendor.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Loro parque/card4.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">La Gruta</h3>
                    <p class="txt">
                        Observa de forma única como se comportan estas criaturas nocturnas desde el interior 
                        de su hábitat y aprende intrigantes curiosidades sobre esta especie fascinante.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Loro parque/card5.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Acuario</h3>
                    <p class="txt">
                        Sumérgete en un mundo acuático sin igual y en el hogar de miles de diferentes especies 
                        de peces y corales. También encontrarás un sorprendente túnel de tiburones a través 
                        del cual estarás muy cerca de uno de los depredadores más impresionantes de la 
                        naturaleza.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Loro parque/card6.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">AquaViva</h3>
                    <p class="txt">
                        Con una apariencia sobrenatural, estas curiosas medusas de sorprendentes y elegantes 
                        formas son las protagonistas indiscutidas de una exhibición diseñada para descubrir 
                        los detalles más especiales de estas fascinantes criaturas que habitan en todos los 
                        mares de la tierra.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres" id="LoroParqueAct">ANIMALES MAS DESTACADOS</h2>
        <div class="fotos">
            <div class="foto">
                <img src="../../Imagenes/Loro parque/Orcas.jpg" alt="Orcas" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-orcas/">Orcas</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Loro parque/nutrias.jpg" alt="Nutrias" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-nutrias/">Nutrias</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Loro parque/perezoso.jpg" alt="Perezosos" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-perezosos/">Perezosos</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Loro parque/capibara.jpg" alt="Capibara" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-capibaras/">Capibara</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Loro parque/flamencos.jpg" alt="Flamencos" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-flamencos/">Flamencos</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Loro parque/hipopotamo.jpg" alt="Hipopotamos" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-hipopotamo-pigmeo/">Hipopotamos</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Loro parque/loros.jpg" alt="Loros" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-loros/">Loros</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Loro parque/tiburones.jpg" alt="Tiburones" width="290px" height="290px">
                <a href="https://www.loroparque.com/ficha-animales-tiburon-gris/">Tiburones</a>
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