<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body>
    <?php include("header.php");?>
    <div class="contenedor">
        <h4>Contáctanos</h4>
        <form action="back/jsonWriter.php" method="post">
        <hr><br>
            <label><img src="assets/images/icons/user.png" class="icon">Nombre:</label>
            <input type="text" name="Nombre" placeholder="Ingresa tu nombre">

            <label><img src="assets/images/icons/id.png" class="icon">ID única de usuario:</label>
            <input type="text" name="IDCLiente" placeholder="Ingresa tu ID" >
            <p>(Si no cuentas con una, deja este espacio en blanco)</p>

            <label for=""><img src="assets/images/icons/email.png" class="icon">Correo:</label>
            <input type="email" name="Correo" placeholder="tucorreo@tudominio.com">

            <label for="">¿En qué podemos ayudarte?</label>
            <textarea class="bigtext" name="Contenido"></textarea>

            <input type="submit" value="Enviar" class="submit">
            <p>Por favor, asegurate de insertar tus datos correctamente</p>
        </form>
    </div>

    <?php include('footer.php')?>
</body>
</html>