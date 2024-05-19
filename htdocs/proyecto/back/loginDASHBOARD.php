<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="../styles/login.css">
</head>
<body>
    <div class="contenedor">
        <h4>Iniciar Sesión</h4>
        <form action="verificacionDASHBOARD.php" method="post">
        <hr><br>
            <label >ID de usuario</label>
            <input type="text" name="ID_PERSONAL" placeholder="Ingresa tu codigo de usuario">

            <input type="submit" value="Iniciar Sesión" class="submit">
        </form>
    </div>
</body>
</html>