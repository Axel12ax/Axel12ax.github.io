<?php

include("./conexion.php");
//echo $_POST['name'];
$name= $_POST['name'];
$apellido= $_POST['apellido'];
$edad= $_POST['edad'];
$correo= $_POST['correo'];
$tel=$_POST['tel'];
$pass= $_POST['pass'];

$sql="insert into registro(nombre,apellido,edad,correo,tel,pass) values('$name','$apellido','$edad','$correo','$tel','$pass')";
$conexion->query($sql) or die($conexion->error);
?>