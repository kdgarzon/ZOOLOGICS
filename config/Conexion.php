<?php
    function conectar(){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db_name = "zooDB";

        //conectarnos a la BD IMAGINARIA
        $link=mysqli_connect($host,$user,$pass) 
        or die ("ERROR al conectar la BD".mysqli_error($link));

        //Seleccionr la BD IMAGINARIA
        mysqli_select_db($link,$db_name) 
        or die ("ERROR al seleccionar la BD".mysqli_error($link));
        return $link;
    }
?>