<?php 
$host="localhost";
$usuario="root";
$contrasena="";
$bd="mi_proyecto";

$conexion= new mysqli($host,$usuario,$contrasena,$bd);

if($conexion->connect_errno){
    echo "Fallo en la conexión";
    exit();
}
else {
    echo"Conexión exitosa";
}

?>