<?php
    require('../../config/conexion.php');
    $link = conectar();
    
    $rol = isset($_SESSION['ID_Rol']) ? $_SESSION['ID_Rol'] : "";
    $_SESSION['ID_Rol'] = $rol;

    /*Consulta de todos los zoológicos*/
    $consultar = "SELECT zoo.ID, zoo.Nombre, c.Ciudad, p.Pais, zoo.Tamanio, zoo.Presupuesto_anual
        FROM Zoologico zoo
        JOIN Ciudad c ON zoo.ID_Ciudad = c.ID
        JOIN Pais p ON zoo.ID_Pais = p.ID
        ORDER BY zoo.ID ASC";
    $registros = $link->query($consultar);

    while($fila = $registros->fetch_array()){ ?>            
        <tr>
            <td><?= $fila[0]; ?></td>
            <td><?= $fila[1]; ?></td>
            <td><?= $fila[2]; ?></td>
            <td><?= $fila[3]; ?></td>
            <td><?= number_format($fila[4]); ?></td>
            <td><?= number_format($fila[5]); ?></td>
        </tr>
    <?php }             

?>
<table class = "table table-striped">
            <thead class = "table-light">
                <th>ID Zoo</th>
                <th>Nombre</th>
                <th>Ciudad</th>
                <th>País</th>
                <th>Tamaño m2</th>
                <th>Presupuesto anual (dólares)</th>
                <th>Acciones</th>
            </thead>
<table>