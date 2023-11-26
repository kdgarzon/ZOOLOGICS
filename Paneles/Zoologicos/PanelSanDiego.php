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
        <img src="../../Imagenes/San Diego/Imagenes zoo/1.jpg" alt="San Diego">
        <?php
            if($rol == 12){
                include('../../config/headerAuxiliar.php');
            }
        ?>
        <div class="cont_dos">
            <div class="uno">
                <h1 class="titulo_imagen">ZOOLOGICO DE SAN DIEGO</h1>
            </div>
            <div class="dos">
                <h3 class="apartado">
                    Situado en San Diego, California, fue creado en 1915 y cuenta con unos 4000 ejemplares 
                    de más de 800 especies distintas.
                </h3>
            </div>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DE SAN DIEGO</h2>
        <p class="parrafo">
            San Diego Zoo Wildlife Alliance es una organización internacional sin fines de lucro 
            dedicada a la conservación con dos puertas principales: el Zoológico de San Diego y el 
            Parque Safari del Zoológico de San Diego. Integramos la salud y el cuidado de la vida 
            silvestre, la ciencia y la educación para desarrollar soluciones de conservación 
            sostenibles.
        </p>
        <h2 class="titulos_contenido_uno">ACTIVIDADES DISPONIBLES</h2>
        <p class="parrafo">
            El famoso zoo de San Diego es una visita obligada cuando se viaja al sur de California, 
            y aquí te contamos por qué. Este gran parque de 40 hectáreas alberga más de 4,000 
            animales raros y en peligro de extinción de todo el mundo, como pandas, koalas, 
            tigres y osos polares, entre otros. El parque también cuenta con una colección botánica 
            de más de 700,000 plantas exóticas.
        </p>
        <p class="parrafo">
            TripAdvisor lo ha clasificado como el segundo zoológico en el mundo y ha ganado muchas 
            veces el premio Travelers Choice, que incluye una lista de los mejores zoológicos 
            basada en millones de opiniones de viajeros.
        </p>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/San Diego/islas del pacifico/ZOO.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">SAN DIEGO ZOO</h3>
                    <p class="txt">
                        “It was great seeing so many awesome animals. The Zoo is a wonderful place to spend 
                        a day and learn about so many fascinating creatures and plants.” 
                        <span class="autor">Irene R.</span>
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/San Diego/islas del pacifico/SAFARI.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">SAN DIEGO SAFARI PARK</h3>
                    <p class="txt">
                        "The park is immaculate, the animals are up close and personal many of them, there are 
                        many options. . .such an awesome place to teach people and children about animals in a 
                        safe and nurturing environment for the animals. . ."
                        <span class="autor">Barb H.</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class = "conservacion">
        <h2 class="titulos_contenido_dos">CONSERVACION DE ESPECIES</h2>
        <div class="tarjetas">
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/islas del pacifico.jpg" alt="Islas del pacifico" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Islas del pacífico</h4>
                    <p class="tecirculo">
                        Programa de Conservación de Aves en Peligro de Hawaii, que opera los Centros de 
                        Conservación de Aves de Keauhou y Maui.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/sur oeste.jpg" alt="Sur oeste" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Sur Oeste</h4>
                    <p class="tecirculo">
                        Gestionamos una reserva de biodiversidad de 900 acres adyacente al San Diego Zoo 
                        Safari Park, que sustenta una diversidad de matorrales costeros y vida silvestre de 
                        chaparral.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/amazonia.jpg" alt="Amazonia" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Amazonía</h4>
                    <p class="tecirculo">
                        Colaboramos con expertos en conservación en la Amazonía peruana para que la vida 
                        silvestre pueda seguir prosperando.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/bosque africano.jpg" alt="bosque africano" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Bosque Africano</h4>
                    <p class="tecirculo">
                        Colaboramos con comunidades locales para conservar la biodiversidad en el bosque de 
                        Ebo de Camerún, uno de los últimos bosques intactos que quedan en toda África Central.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/sabana.jpg" alt="sabana" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Sabana</h4>
                    <p class="tecirculo">
                        En la sabana africana del norte de Kenia, colaboramos con innovadores en conservación 
                        para proteger la vida silvestre, incluidos los elefantes y rinocerontes africanos.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/oceanos.jpg" alt="oceanos" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Oceanos</h4>
                    <p class="tecirculo">
                        Colaboramos con una variedad de innovadores para salvaguardar dos de los depredadores 
                        más emblemáticos del océano.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/selva asiatica.jpg" alt="selva asiatica" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Selva Asiática</h4>
                    <p class="tecirculo">
                        Colaboramos con científicos locales para conservar la vida silvestre única de la región 
                        y apoyamos los esfuerzos para abogar por el aceite de palma sostenible.
                    </p>
                </div>
            </div>
            <div class = "circulo_tarjeta">
                <div class="cirImg">
                    <img src="../../Imagenes/San Diego/islas del pacifico/bosque australiano.jpg" alt="bosque australiano" height="216px" width="216px">
                </div>
                <div class="cirText">
                    <h4 class="cirTitulo">Bosque Australiano</h4>
                    <p class="tecirculo">
                        Trabajamos estrechamente con conservacionistas en Australia porque reconocemos la 
                        importancia de preservar la historia natural y cultural representada en esta región.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres">ANIMALES MAS DESTACADOS</h2>
        <div class="fotos">
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/Gorila.jpg" alt="Gorila" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/gorilla">Gorila</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/Jaguar.jpg" alt="Jaguar" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/jaguar">Jaguar</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/Tigre.jpg" alt="Tigre" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/tiger">Tigre</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/ornitorrinco.png" alt="Ornitorrinco" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/platypus">Ornitorrinco</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/Koala.jpg" alt="Koala" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/koala">Koala</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/oso polar.jpg" alt="Oso polar" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/polar-bear">Oso polar</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/pinguino.jpg" alt="Pinguino" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/penguin">Pinguino</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/alala.jpg" alt="Alalá" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/alala">Alalá</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/elefante.jpg" alt="Elefante" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/elephant">Elefante</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/rinoceronte.jpg" alt="Rinoceronte" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/rhino">Rinoceronte</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/tortuga del desierto.jpg" alt="Tortuga" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/desert-tortoise">Tortuga</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Animales de San Diego/búho.jpg" alt="Búho Llanero" width="290px" height="290px">
                <a href="https://sandiegozoowildlifealliance.org/species/burrowing-owl" id="buho">Búho Llanero</a>
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