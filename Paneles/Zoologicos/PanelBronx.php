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
        <img src="../../Imagenes/San Diego/Imagenes zoo/bronx.jpg" alt="San Diego">
        <?php
            if($rol == 12){
                include('../../config/headerAuxiliar.php');
            }
        ?>
        <div class="cont_dos">
            <div class="uno">
                <h1 class="titulo_imagen" id="titBronx">ZOOLOGICO DEL BRONX</h1>
            </div>
            <div class="dos">
                <h3 class="apartado">
                    El zoo, que ocupa una extensión de 26 hectáreas, alberga a 2.800 animales de 300 
                    especies.
                </h3>
            </div>
        </div>
    </div>
    <div class="texto_cuerpo">
        <h2 class="titulos_contenido_principal">BIENVENIDO AL ZOOLOGICO DEL BRONX</h2>
        <p class="parrafo">
            El Zoológico del Bronx abarca más de 265 acres, lo que significa que hay muchas 
            oportunidades para que puedas conectarte con los animales que amas. Ya sea que desee 
            ver pastar a los bisontes o escuchar a los expertos durante una charla con los 
            cuidadores, lo tenemos cubierto.
        </p>
        <h2 class="titulos_contenido_uno" id="actBronx">ACTIVIDADES DISPONIBLES</h2>
        <div class="cards_actividades">
            <div class="card">
                <img src="../../Imagenes/Bronx/card1.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Carrusel de insectos</h3>
                    <p class="txt">
                        Nuestros insectos favoritos están todos aquí: una mantis religiosa de patas largas, 
                        un saltamontes de color verde brillante e incluso un escarabajo pelotero. Dar una 
                        vuelta en el carrusel es una gran parada en medio del parque.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Bronx/card2.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Aterrizaje de periquitos</h3>
                    <p class="txt">
                        Disfrute de interacciones cercanas con aves bulliciosas y coloridas. Conserve su 
                        semilla de cortesía: los periquitos volarán libremente por el hábitat y pueden optar 
                        por acercarse a usted para tomar un pequeño refrigerio.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Bronx/card3.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Alimentación de pinguinos</h3>
                    <p class="txt">
                        Cuando llega la hora de comer, nuestros pingüinos de Magallanes salen de sus guaridas 
                        o suben desde las profundidades y se balancean en busca de peces.
                    </p>
                </div>
            </div>
            <div class="card">
                <img src="../../Imagenes/Bronx/card4.jpg" alt="" width="561px" height="283px">
                <div class="texto_card">
                    <h3 class="subtitulo">Alimentación de leones marinos</h3>
                    <p class="txt">
                        Los leones marinos son curiosos e inteligentes. Nuestras sesiones de entrenamiento/
                        alimentación ayudan a estimularlos. En otoño, los animales pueden comer más de lo
                        habitual. Están construyendo aislamiento para el clima frío.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="galeria_animales">
        <h2 class="titulos_contenido_tres" id="actBronx">ANIMALES MAS DESTACADOS</h2>
        <div class="fotos">
            <div class="foto">
                <img src="../../Imagenes/Bronx/bisonte.jpg" alt="Bisonte" width="290px" height="290px">
                <a href="https://bronxzoo.com/things-to-do/exhibits/american-bison">Bisonte</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Bronx/oso grande.jpg" alt="Oso grande" width="290px" height="290px">
                <a href="https://bronxzoo.com/things-to-do/exhibits/big-bears">Oso grande</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Bronx/dholes.jpg" alt="Dholes" width="290px" height="290px">
                <a href="https://bronxzoo.com/things-to-do/exhibits/dholes">Dholes</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Bronx/Maleo.jpg" alt="Maleo" width="290px" height="290px">
                <a href="https://es.wikipedia.org/wiki/Macrocephalon_maleo">Maleo</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Bronx/pavo ocelado.jpg" alt="Pavo Ocelado" width="290px" height="290px">
                <a href="https://es.wikipedia.org/wiki/Meleagris_ocellata">Pavo Ocelado</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Bronx/paloma nicobar.jpg" alt="Paloma Nicobar" width="290px" height="290px">
                <a href="https://es.wikipedia.org/wiki/Caloenas_nicobarica">Paloma Nicobar</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Bronx/zorro fenec.jpg" alt="Zorro Fenec" width="290px" height="290px">
                <a href="https://www.nationalgeographic.es/animales/zorro-fenec">Zorro Fenec</a>
            </div>
            <div class="foto">
                <img src="../../Imagenes/Bronx/rata nube.jpg" alt="Rata Nube" width="290px" height="290px">
                <a href="https://es.wikipedia.org/wiki/Phloeomys_pallidus">Rata Nube</a>
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