<?php

include("./conexion.php");
//echo $_POST['name'];
$name= $_POST['name'];
$price= $_POST['price'];
$stock= $_POST['stock'];
$cate= $_POST['cate'];
$img= $_POST['img'];

$sql="insert into prueba(name,price,stock,img,cate) values('$name', $price, $stock,'$img','$cate')";
$conexion->query($sql) or die($conexion->error);
?>