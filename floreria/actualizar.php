

<?php
include("conexion.php");
$con = conectar();

$id = $_GET['id'];

$sql = "SELECT * FROM  productos WHERE id='$id'";
$query = mysqli_query($con, $sql);

$row = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
     <link href="crudproducto.css" rel="stylesheet"> 
     <link href="crudactualizar.css" rel="stylesheet"> 
    <!--<link rel="stylesheet" href="http://localhost/Legendary Motorsport/proyecto paginas web\crudproducto.css" />-->
    <title></title>                                                                                                                                                                  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>




<body>
<a href="productosNuevos.php" class="btn" type="submit" name="registar"><img src="img/Logos/flecha.png"  width="50"><h5><p style="color: white;">Volver </h5> </p></a>

<h2><p style="color: black;">Actualizar Producto</h2> </p></a>



<div class="container mt-5">
        <form action="update.php" method="POST">
            
        <input type="hidden" name="id" value="<?php echo $row['id']  ?>">
            <h2><p style="color: white;">nombre:</h2> </p>
            <input type="text" class="form-control-sm" name="nombre" id="nombre" placeholder="nombre" value="<?php echo $row['nombre']  ?>">
            <h2><p style="color: white;">categoria:</h2> </p>
            <input type="text" class="form-control-sm" name="categoria" id="categoria" placeholder="categoria" value="<?php echo $row['categoria']  ?>">
            <h2><p style="color: white;">Precio:</h2> </p>
            <input type="text" class="form-control-sm" name="precio" id="precio" placeholder="precio" value="<?php echo $row['precio']  ?>">
            <h2><p style="color: white;">Imagen:</h2> </p>
            <input type="text" class="form-control mb-3" name="imagen" id="imagen" placeholder="imagen" value="<?php echo $row['imagen']  ?>">
            <br>
            <br>
            <button type="text" class="btn1" type="submit" name="registar" id="registrar"><h5><p style="color: black   ;">Actualizar Producto</h5> </p></button>
        </form>

    </div>
</section>

    
</body>

</html>