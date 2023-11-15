<?php

include("./conexion.php");
//echo $_POST['name'];

$marca= $_POST['marca'];
$modelo= $_POST['modelo'];
$año= $_POST['año'];
$kilo= $_POST['kilo'];
$color= $_POST['color'];
$img= $_POST['img'];
$motor= $_POST['motor'];
$precio= $_POST['precio'];
$estado= $_POST['estado'];
$transmicion= $_POST['transmicion'];
$descripcio= $_POST['descripcion'];

$sql="insert into Carros(Marca,Modelo,año,kilo,color,img,motor,Precio,condicion,transmicion,descripcion) values
('$marca','$modelo','$año','$kilo','$color','$img','$motor','$precio','$estado','$transmicion','$descripcio')";
$conexion->query($sql) or die($conexion->error);
?>