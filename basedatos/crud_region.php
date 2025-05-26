<?php


//crear variable para cada dato que viende del formulario

    $codigo = $_POST['txt_codigo'];
    $nombre = $_POST['txt_nombre'];
    $desc = $_POST['txt_desc'];

    echo "DATOS DE LA REGION:";
    echo "<br>Codigo: ". $codigo;
    echo "<br>Nombre: ". $nombre;
    echo "<br>Descripcion: ". $desc;

    //vamos a utilizar conexion existente
    require_once("conexion.php");

    $sql="insert into regiones(cod_region,nombre,descripcion)
        values('.$codigo.','".$nombre."','".$desc."')";
//ejecutar el codigo en la base de datos

try {
$ejecutar = mysqli_query($conexion, $sql);
 //echo "valor de ejecutado: ". $ejecutar;
echo "<br>Datos alacenaditos";
} catch (Exception $th) {
    echo "<br>Datos no fueron guardados<br>". $th;
}



?>