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
        <h4>Iniciar Sesión</h4>
        <form action="" method="post">
        <hr><br>
            <label for="">Email:</label>
            <input type="email" name="email" placeholder="Ingresa tu Email">

            <label for="">Contraseña:</label>
            <input type="password" name="pass" placeholder="Ingresa tu Contraseña">

            <input type="submit" value="Iniciar Sesión" class="submit">
            <p>¿No tienes cuenta? <a href="registrar.php">Registrate</a></p>
        </form>
    </div>
</body>
</html>