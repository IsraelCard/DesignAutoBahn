<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <?php include("header.php") ?>

    <div class="contenedor">
        <h4>Iniciar Sesión</h4>
        <form action="back/login.php" method="post">
        <hr><br>
            <!--Mensaje de exito al crear cuenta-->
            <?php
                // Verificar si hay un mensaje de alerta en la sesión-->
                if (isset($_SESSION['mensaje_alerta'])) {
                    // Obtener el mensaje de alerta
                    $mensaje_alerta = $_SESSION['mensaje_alerta'];

                    //Imprimir mesnaje
                    echo $mensaje_alerta;

                    // Eliminar el mensaje de alerta de la sesión
                    unset($_SESSION['mensaje_alerta']);
                }
            ?>

            <!--Cuadros de texto para introducir email y constraseña-->
            <label for="email">Email:</label>
            <input type="email" name="email" placeholder="Ingresa tu Email" required>

            <label for="pass">Contraseña:</label>
            <input type="password" name="pass" placeholder="Ingresa tu Contraseña" required>

            <input type="submit" value="Iniciar Sesión" class="submit">
            <p>¿No tienes cuenta? <a href="registrar.php">Registrate</a></p>
        </form>
    </div>
</body>
</html>