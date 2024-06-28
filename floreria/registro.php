<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name = "floreria";

$con = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if (!$con) {
    die("Error " . mysqli_connect_error());
}

// Inicializar variables
$nombre = $correo = $telefono = $sexo = $contrasena = $error_message = "";

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $sexo = $_POST["sexo"];
    $contrasena = $_POST["contrasena"];

    // Validar contraseña
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/', $contrasena)) {
        $error_message = "La contraseña debe tener al menos 8 caracteres, incluyendo mayúsculas, minúsculas, números y caracteres especiales.";
    } else {
        // Consulta para verificar si el correo ya existe
        $query = "SELECT * FROM registro WHERE correo = '$correo'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $error_message = "El correo electrónico ya ha sido registrado antes.";
        } else {
            // Encriptar contraseña
            $contrasena_hashed = md5($contrasena);

            // Insertar nuevo registro
            $insert = "INSERT INTO registro (id, nombre, correo, telefono, sexo, contrasena)
                       VALUES (0, '$nombre', '$correo', '$telefono', '$sexo', '$contrasena_hashed')";

            if (mysqli_query($con, $insert)) {
                echo "<script>
                        alert('Registro exitoso');
                        window.location.href = 'index.html';
                      </script>";
            } else {
                $error_message = "Hubo un error en el registro.";
            }
        }
    }
}

mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="registro.css"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>
    <section id="content">
        <div class="login-card">
            <h1><p>REGISTRO</p></h1>
            <form action="registro.php" method="POST">
                <p>
                    <label for="nombre"></label>
                    <input type="text" name="nombre" id="nombre" required placeholder="Escribe tu nombre" value="<?php echo htmlspecialchars($nombre); ?>">
                </p>
                <p>
                    <label for="correo"></label>
                    <input type="email" name="correo" id="correo" required placeholder="Escribe tu correo" value="<?php echo htmlspecialchars($correo); ?>">
                </p>
                <p>
                    <label for="telefono"></label>
                    <input type="number" name="telefono" id="telefono" required placeholder="Escribe tu teléfono" value="<?php echo htmlspecialchars($telefono); ?>">
                </p>
                <p>
                    <label for="sexo"></label>
                    <input type="text" name="sexo" id="sexo" required placeholder="Escribe tu sexo" value="<?php echo htmlspecialchars($sexo); ?>">
                </p>
                <p>
                    <label for="contrasena"></label>
                    <input type="text" name="contrasena" id="contrasena" required placeholder="Escribe tu contraseña">
                </p>
                <?php if (!empty($error_message)): ?>
                    <p class="error-message"><?php echo $error_message; ?></p>
                <?php endif; ?>
                <button class="btn" type="submit" name="registrar" id="registrar">
                    <h4>Registrarse</h4>
                </button>
            </form>
        </div>
    </section>
</body>
</html>
