<?php
    /*Se procede a inicializar el buffer para crear el PDF*/
    ob_start();


    require('../../config/conexion.php');
    $link = conectar();
    
    $rol = isset($_SESSION['ID_Rol']) ? $_SESSION['ID_Rol'] : "";
    $_SESSION['ID_Rol'] = $rol;

    $ID_u = (isset($_GET['ID'])?$_GET['ID']:"");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
        crossorigin="anonymous">
    <title>Reporte de gestión</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Caveat+Brush&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=McLaren&display=swap');
        table, tbody, tr, td{
            border: 1px solid #9D9C9C;
        }
        h1{
            color: #46A59F;
            font-family: 'Caveat Brush';
            font-size: 50px;
            font-style: normal;
            font-weight: 400;
            text-align: center;
        }
        th, tr, td, p{
            color: #000;
            text-align: justify;
            font-family: 'McLaren', sans-serif;
            font-size: 16px;
        }
        td, th{
            padding: 10px;
            text-align: center;
        }
        .zoo{
            background: #98FB98;
        }
        .celda{
            background: #EFEFEF;
        }
        .indice{
            background: #D1FFC8;
        }
    </style>
</head>
<body>
    <?php 
        /*Consulta de todos los zoológicos*/
        $consultar = "SELECT zoo.ID, zoo.Nombre, c.Ciudad, p.Pais, zoo.Tamanio, zoo.Presupuesto_anual
            FROM Zoologico zoo
            JOIN Ciudad c ON zoo.ID_Ciudad = c.ID
            JOIN Pais p ON zoo.ID_Pais = p.ID
            WHERE zoo.ID = $ID_u
            ORDER BY zoo.ID ASC";
        $registros = $link->query($consultar);

        while($fila = $registros->fetch_array()){           
    ?>
    <div class="encabezadoDocumento">
        <h1>Informe general del zoológico</h1>
    </div>
    <table class="table">
        <tbody>
            <tr>
                <th scope="row" colspan="3" class="zoo">Nombre del Zoológico: </th>
                <td colspan="3" class="celda"><?= $fila[1]; ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3" class="zoo">Ciudad: </th>
                <td colspan="3" class="celda"><?= $fila[2]; ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3" class="zoo">País: </th>
                <td colspan="3" class="celda"><?= $fila[3]; ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3" class="zoo">Tamaño en metros cuadrados: </th>
                <td colspan="3" class="celda"><?= number_format($fila[4]); ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3" class="zoo">Presupuesto anual (dólares): </th>
                <td colspan="3" class="celda"><?= number_format($fila[5]); ?></td>
            </tr>
        </tbody>
    </table>
    <?php }   ?>
    <p>A continuación se muestra el reporte total de especies notificado hasta la fecha:</p>
    <?php
        $sql_dos = "SELECT esp.ID, esp.Nombre_vulgar, esp.Nombre_cientifico, nom.Especie, 
            f.Familia, e.Nivel_peligro, z.Nombre
            FROM Especie esp
            JOIN Nombre_Especie nom ON esp.ID_NomEspecie = nom.ID
            JOIN Familia f ON esp.ID_Familia = f.ID
            JOIN Extincion e ON esp.ID_Extincion = e.ID
            JOIN Zoologico z ON esp.ID_Zoo = z.ID AND esp.ID_Zoo = $ID_u
            ORDER BY esp.ID ASC";
        $regSQLdos = $link->query($sql_dos);

    ?>
    <div class="encabezadoDocumento">
        <h1>Especies</h1>
    </div>
    <table class="table">
        <thead>
            <th class="zoo">ID</th>
            <th class="zoo">Nombre Vulgar</th>
            <th class="zoo">Nombre científico</th>
            <th class="zoo">Especie</th>
            <th class="zoo">Familia</th>
            <th class="zoo">Nivel de peligro</th>
        </thead>
        <tbody>
            <?php while($esp = $regSQLdos->fetch_array()){?>
            <tr>
                <th scope="row" class="indice"><?= $esp[0]; ?></th>
                <td class="celda"><?= $esp[1]; ?></td>
                <td class="celda"><?= $esp[2]; ?></td>
                <td class="celda"><?= $esp[3]; ?></td>
                <td class="celda"><?= $esp[4]; ?></td>
                <td class="celda"><?= $esp[5]; ?></td>
            </tr>
            <?php }   ?>
        </tbody>
    </table>
    <p>A continuación se muestra el reporte total de animales notificado hasta la fecha:</p>
    <?php
        $sqlTres = "SELECT a.ID, esp.Especie, s.Sexo, a.Anio_Nacimiento, p.Pais, c.Continente, z.Nombre
            FROM Animal a
            JOIN Nombre_Especie esp ON a.ID_Especie = esp.ID
            JOIN Sexo s ON a.ID_Sexo = s.ID
            JOIN Pais p ON a.ID_Pais = p.ID
            JOIN Continente c ON a.ID_Continente = c.ID
            JOIN Zoologico z ON a.ID_Zoo = z.ID AND a.ID_Zoo = $ID_u
            ORDER BY a.ID ASC";
        $regSQLtres = $link->query($sqlTres);

    ?>
    <div class="encabezadoDocumento">
        <h1>Animales</h1>
    </div>
    <table class="table">
        <thead>
            <th class="zoo">ID</th>
            <th class="zoo">Especie</th>
            <th class="zoo">Sexo</th>
            <th class="zoo">Año de nacimiento</th>
            <th class="zoo">País</th>
            <th class="zoo">Continente</th>
        </thead>
        <tbody>
            <?php while($ani = $regSQLtres->fetch_array()){?>
            <tr>
                <th scope="row" class="indice"><?= $ani[0]; ?></th>
                <td class="celda"><?= $ani[1]; ?></td>
                <td class="celda"><?= $ani[2]; ?></td>
                <td class="celda"><?= $ani[3]; ?></td>
                <td class="celda"><?= $ani[4]; ?></td>
                <td class="celda"><?= $ani[5]; ?></td>
            </tr>
            <?php }   ?>
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" 
        crossorigin="anonymous"></script>
</body>
</html>
<?php
    $html = ob_get_clean();
    require_once '../../Librerias/dompdf/autoload.inc.php';

    use Dompdf\Dompdf;
    $dompdf = new Dompdf();

    $options = $dompdf->getOptions();
    $options->set(array('isRemoteEnabled' => true));
    $dompdf->setOptions($options);

    $dompdf->loadHtml($html);
    //$dompdf->setPaper('A4', 'landscape');
    $dompdf->setPaper('letter', 'landscape');

    $dompdf->render();
    $dompdf->stream("reporte.pdf", array("Attachment" => false));
?>
