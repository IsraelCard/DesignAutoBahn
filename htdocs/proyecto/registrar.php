<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <?php include("header.php") ?>

    <div class="contenedor">
        <h4>Registrate</h4>
        <form action="back/registro.php" method="post">
        <hr><br>
            <label for="">Email:</label>
            <input type="email" name="email" placeholder="Ingresa tu Email" required>

            <label for="">Usuario:</label>
            <input type="text" name="name" placeholder="Nombre de Usuario" required>

            <label for="">Contraseña:</label>
            <input type="password" name="pass1" placeholder="Ingresa tu Contraseña" required>

            <label for="">Confirmar contraseña:</label>
            <input type="password" name="pass2" placeholder="Ingresa nuevamente tu Contraseña" required>

            <?php
                // Iniciar sesión
                session_start();

                // Verificar si hay un mensaje de alerta en la sesión
                if (isset($_SESSION['mensaje_alerta'])) {
                    // Obtener el mensaje de alerta
                    $mensaje_alerta = $_SESSION['mensaje_alerta'];

                    //Imprimir mesnaje
                    echo $mensaje_alerta;

                    // Eliminar el mensaje de alerta de la sesión
                    unset($_SESSION['mensaje_alerta']);
                }
            ?>

            <input type="submit" value="Registrar" class="submit">
            <p>¿Ya tienes cuenta? <a href="login.php">Iniciar Sesión</a></p>
        </form>
    </div>
</body>
</html>