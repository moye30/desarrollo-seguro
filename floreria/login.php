<?php

 //encontar la base de datos con los campos de texto
$txtusuario=$_POST['email'];
$txtpassword=$_POST['password'];
 
//conectar a la base de datos
$con=mysqli_connect("localhost", "root", "", "floreria");
$consulta="SELECT * FROM registro WHERE correo= '$txtusuario' and contrasena='$txtpassword' ";
$resultado=mysqli_query($con, $consulta);

$filas=mysqli_fetch_row($resultado);


if ($filas) {
    echo "Autenticacion Exitosa";
    header("Location: productos.php");
}
else{
    echo "Error en la autenticacion";
    header("Location: index.html");
}



mysqli_free_result($resultado);
mysqli_close($con);

?>