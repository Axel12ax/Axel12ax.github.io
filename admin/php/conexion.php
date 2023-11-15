<?php
$bd="Clickcar";
$ip="localhost";
$user="root";
$pass="";

$conexion =new mysqli($ip,$user,$pass,$bd);
if($conexion->connect_error){
    die(";NO se pudo establecer conexion a la BD");
}else{
    echo" Conexion Su";
}
?>