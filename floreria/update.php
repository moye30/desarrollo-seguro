<?php

include("conexion.php");
$con=conectar();

$id = $_POST['id'];
echo $id;

$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];
$imagen=$_POST['imagen'];


$sql="UPDATE productos SET nombre='$nombre', categoria='$categoria',precio='$precio',imagen='$imagen' WHERE id ='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: productosNuevos.php");
    }
?>