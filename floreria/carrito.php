<?php

session_start();

include ('conexion.php');
$con = conectar();
$car = array(
    'productos' => array(),
    'subtotal' => 0,
    'total' => 0
);

if(isset($_SESSION["carrito"])){
    $car = $_SESSION["carrito"];
}
$carritosGuardados = [];
if(isset($_SESSION["carritos"])){
    $carritosGuardados = $_SESSION["carritos"];
}

calcular($car, $carritosGuardados);

if(isset($_GET["carrito"])){
    print $_SESSION["carrito"]['total'];
    $id = $_GET["carrito"];
    if($id){
        add($id, $car, $con, $carritosGuardados);
    }
}

if(isset($_GET["remove"])){
    $id = $_GET["remove"];
    if(isset($id) || $id == 0){
        remove($id, $car, $carritosGuardados);
    }
}

function add($p = [], &$car, &$con, &$carritosGuardados){
    $sql = mysqli_query($con, "SELECT * FROM productos WHERE id = '$p' ");
    $resul = mysqli_fetch_array($sql);
    $resul['cantidad'] = 1;
    array_push($car['productos'], $resul);
    $_SESSION["carrito"] = $car;
    calcular($car, $carritosGuardados);
}

function calcular(&$car, &$carritosGuardados){
    $car['subtotal'] = 0;
    $car['total'] = 0;
    $car['index'] = 0;

    foreach($car['productos'] as &$p){
        $car['subtotal'] += $p['precio'];
    }
    $car['total'] = $car['subtotal'];
    $_SESSION["carrito"] = $car;

    $carritosGuardados[$car['index']] = $car;
    $_SESSION["carritos"] = $carritosGuardados;
}

function remove($index = 0, &$car, &$carritosGuardados){
    array_splice($car['productos'], $index, 1);
    calcular($car, $carritosGuardados);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productos.css"/>
    <title>CARRITO</title>

</head>
<body>
<header>
<div class="container">
            <p class="logo">Floreria Bella Amore</p>
            <nav>
            <a href="index.html">inicio</a>
             <a href="productos.php">productos</a>
            <a href="registro.html">Registrate</a>
            <a href="login.html">Inicia sesion</a>

               
            </nav>
        </div>
</header>

<body>

</body>

<section id="carrito"> 
<nav>
        <h1>Total a pagar: $ <?php echo $car['total'] ?></h1>
            <ul class="nav-right-section">
                <li>
                    <form action="productos.php" method="get">
                        <li type="submit" name="p" value="p" class="boton" ><a href="productos.php"> Seguir Comprando</a></li>
                    </form>
                </li>
                <li>
                    <form action="#" method="get">
                        <li type="submit" name="comprar" value="comprar" class="boton" ><a href="index.html">Salir</a> </li>
                    </form>
                </li>
            </ul>
        </nav>
</section>
   
<main>
        <?php

            foreach($car['productos'] as $key =>$row){
        ?>
    <div class="card">
        <div class="imgBox">
            <figure>
            <img src="<?php echo $row ['imagen'] ?>" alt="mouse corsai" class="mouse">
            </figure>
            <div class="contentBox">
            <p><?php echo $row['nombre'] ?></p>
                <p>$<?php echo $row['precio'] ?></p>
                <form action="carrito.php" method="get">
                <button type="submit" name="remove" value="<?php echo $key?>" class="btn">Eliminar</button>
                </form>
            </div>
        </div>   
    </div>
    <?php }?>

 

    </main>