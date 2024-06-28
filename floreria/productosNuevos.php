<?php 
    include("conexion.php");
    $con=conectar();

    $sql="SELECT *  FROM productos";
    $query=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> productos</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="productosNuevos.css"/>
        
    </head>
    <header>
    <span class="logo">Floreria Bella Amore</span>
        <nav>
           <a href="index.html">inicio</a>
             <a href="productos.php">productos</a>
            <a href="registro.html">Registrate</a>
            <a href="login.html">Inicia sesion</a>

    </header>
    <body>
            <div class="login-card">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Ingrese los productos a registrar</h1>
                                <form action="insertar.php" method="POST">

                                    <input type="text" class="form-control mb-3" name="nombre" id="nombre" placeholder="ingresa el nombre del producto">
                                    <input type="text" class="form-control mb-3" name="categoria" id="categoria" placeholder="ingresa la categoria del producto">
                                    <input type="number" class="form-control mb-3" name="precio" id="precio" placeholder="ingresa el precio del producto">
                                    <input type="text" class="form-control mb-3" name="imagen" id="imagen" placeholder="ingresa la iamgen del producto">
                                    
                                    <input type="submit" class="btn btn">
                                </form>
                        </div>

                        <div class="login-form">
                            <table class="table" >
                                <thead class="table-success table-stripd" >
                                    <tr>
                                        <th>Id</th>
                                        <th>Nombre</th>
                                        <th>categoria</th>
                                        <th>Precio</th>
                                        <th>Imagen</th>
                                    </tr>
                                </thead>

                                <tbody>
                                        <?php
                                            while($row=mysqli_fetch_array($query)){
                                        ?>
                                            <tr>
                                                <th><?php echo $row['id']?></th>
                                                <th><?php  echo $row['nombre']?></th>
                                                <th><?php  echo $row['categoria']?></th>
                                                <th><?php  echo $row['precio']?></th>
                                                <th><?php  echo $row['imagen']?></th>    
                                                <th><a href="actualizar.php?id=<?php echo $row['id'] ?>" class="btn btn">Edita el producto</a></th>
                                                <th><a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn">Desechar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
            </div>
    </body>
</html>
</html>