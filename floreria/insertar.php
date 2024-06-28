<?php
include("conexion.php");
$con=conectar();

$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];
$imagen=$_POST['imagen'];


$sql="INSERT INTO productos (id, nombre, categoria, precio, imagen) VALUES ('0','$nombre','$categoria','$precio','$imagen')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: productosNuevos.php");
    
}else {
}
?>