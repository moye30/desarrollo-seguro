<?php

include("conexion.php");
$con = conectar();



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="productos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
</head>

<header>
        <span class="logo">Floreria Bella Amore</span>
        <nav>
            
                 <a href="registro.html">Registrate</a>
                 <a href="login.html">Inicia sesion</a>
           <a href="index.html">inicio</a>
           <a href="carrito.php">carrito</a>
           <a href="index.h">productos</a>


        </nav>
</header>

<body>
    <?php
    $select = mysqli_query($con, "SELECT * FROM productos");
    ?>
    <section class="cards">
        <?php
        while ($row = mysqli_fetch_array($select)) {

        ?>





            <div class="card">


                <div class="imgBox">
                    <img src="<?php echo $row['imagen'] ?>" alt="mouse corsai" class="mouse">
                </div>

                <div class="contentBox">
                    <h3> <?php echo $row['nombre'] ?> </h3>
                    <h2 class="price">$<?php echo $row['precio'] ?><small>.</small>00</h2>
                    <form action="carrito.php" method="get">
                        <button type="submit" class="buy" name="carrito" value="<?php echo $row['id'] ?>">Agregar</button>
                    </form>
                </div>

            </div>
        <?php    } ?>
    </section>
</body>

<footer>

</footer>

</html>