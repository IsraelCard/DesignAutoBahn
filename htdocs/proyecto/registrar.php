<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/login.css">

    <script>
        function validateForm(event) {
            // Obtener los valores de los campos de contraseña
            var pass1 = document.getElementsByName('pass1')[0].value;
            var pass2 = document.getElementsByName('pass2')[0].value;

            //Contenedor de mensajes
            var divAlerts = document.getElementById('alerts');

            // Comprobar si las contraseñas coinciden
            if (pass1 !== pass2) {
                // Si no coinciden, mostrar un mensaje de error y evitar el envío del formulario
                var alert = document.createElement('span');
                alert.className = 'error';
                alert.textContent = 'Las contraseñas no coinciden! Por favor, inténtalo de nuevo.';

                divAlerts.appendChild(alert);
                event.preventDefault(); // Evita el envío del formulario
            }
        }

        // Asociar la función validateForm al evento submit del formulario
        window.onload = function() {
            document.getElementById('registroForm').addEventListener('submit', validateForm);
        }
    </script>
</head>
<body>
    <?php include("header.php") ?>

    <div class="contenedor">
        <h4>Registrate</h4>

        <form id="registroForm" action="back/registro.php" method="post">
        <hr><br>

        <!--Mensajes de alerta-->
        <div id="alerts">
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
        </div>

        <!-- Cuadros de texto para introducir los valores para el registro -->
        <label for="email"><img src="assets/images/icons/email.png" class="icon">Email:</label>
        <input type="email" name="email" placeholder="Ingresa tu Email" required>

        <label for="name"><img src="assets/images/icons/user.png" class="icon">Usuario:</label>
        <input type="text" name="name" placeholder="Nombre de Usuario" required>

        <label for="pass1"><img src="assets/images/icons/pass.png" class="icon">Contraseña:</label>
        <input type="password" name="pass1" placeholder="Ingresa tu Contraseña" required>

        <label for="pass2"><img src="assets/images/icons/pass.png" class="icon">Confirmar contraseña:</label>
        <input type="password" name="pass2" placeholder="Ingresa nuevamente tu Contraseña" required>

        <input type="submit" value="Registrar" class="submit">
        <p>¿Ya tienes cuenta? <a href="loginForm.php">Iniciar Sesión</a></p>
    </form>
    </div>

    <?php include('footer.php') ?>
</body>
</html>