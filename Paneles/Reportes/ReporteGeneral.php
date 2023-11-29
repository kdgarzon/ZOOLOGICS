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

    <table class="table">
        <thead>
            <td colspan="6">
                <div class="encabezadoDocumento">
                    <h1>Informe general del zoológico</h1>
                </div>
            </td>
        </thead>
        <tbody>
            <tr>
                <th scope="row" colspan="3">Nombre del Zoológico: </th>
                <td colspan="3"><?= $fila[1]; ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3">Ciudad: </th>
                <td colspan="3"><?= $fila[2]; ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3">País: </th>
                <td colspan="3"><?= $fila[3]; ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3">Tamaño en metros cuadrados: </th>
                <td colspan="3"><?= number_format($fila[4]); ?></td>
            </tr>
            <tr>
                <th scope="row" colspan="3">Presupuesto anual (dólares): </th>
                <td colspan="3"><?= number_format($fila[5]); ?></td>
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
            <th>ID</th>
            <th>Nombre Vulgar</th>
            <th>Nombre científico</th>
            <th>Especie</th>
            <th>Familia</th>
            <th>Nivel de peligro</th>
        </thead>
        <tbody>
            <?php while($esp = $regSQLdos->fetch_array()){?>
            <tr>
                <th scope="row"><?= $esp[0]; ?></th>
                <td><?= $esp[1]; ?></td>
                <td><?= $esp[2]; ?></td>
                <td><?= $esp[3]; ?></td>
                <td><?= $esp[4]; ?></td>
                <td><?= $esp[5]; ?></td>
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
            <th>ID</th>
            <th>Especie</th>
            <th>Sexo</th>
            <th>Año de nacimiento</th>
            <th>País</th>
            <th>Continente</th>
        </thead>
        <tbody>
            <?php while($ani = $regSQLtres->fetch_array()){?>
            <tr>
                <th scope="row"><?= $ani[0]; ?></th>
                <td><?= $ani[1]; ?></td>
                <td><?= $ani[2]; ?></td>
                <td><?= $ani[3]; ?></td>
                <td><?= $ani[4]; ?></td>
                <td><?= $ani[5]; ?></td>
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
    $dompdf->setPaper('letter');

    $dompdf->render();
    $dompdf->stream("reporte.pdf", array("Attachment" => false));
?>
