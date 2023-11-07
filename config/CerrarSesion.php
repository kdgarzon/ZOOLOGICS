<?php
    //function cerrar_sesion(){
        session_start();
        unset($_SESSION['txtUser']);
        session_destroy();
        header('Location:../Index/PaginaPrincipal.php');
    //}
?>