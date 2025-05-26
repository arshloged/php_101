<?php
    echo "archivo con procesos crud para las regiones";

    $codigo = $_POST["txt_codigo"];
    $nombre = $_POST["txt_nombre"];
    $desc = $_POST["txt_desc"];

    echo "DATOS DE LA REGION:";
    echo "<br>Codigo: ". $codigo;
    echo "<br>Nombre: ". $nombre;
    echo "<br>Descripcion: ". $desc;

?>