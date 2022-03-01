<?php
    /**
     * Declarar las 4 variables principales para la conexión
     */
    $db_dir = "localhost";
    $db_nombre = "olmaflowersdb";
    $db_usuario = "root";
    $db_contra = "";

    //establecer conexion con la db
    $conexion = mysqli_connect($db_dir,$db_usuario,$db_contra,$db_nombre);

    if(mysqli_errno($conexion)){
        exit();
    }
?>