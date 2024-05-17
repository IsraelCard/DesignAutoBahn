<?php
$bd = new mysqli("localhost","root","","usuarios");

$valoremail =  $_POST["email"];
$valorname = $_POST["name"];
$valorpass = $_POST["pass1"];
$confpass = $_POST["pass2"];

if ($valorpass == $confpass) {
    $query=mysqli_query($bd,"INSERT INTO usuarios(correo,nombre,contraseña) VALUES ('$valoremail','$valorname','$valorpass');");

    if ($query == TRUE) {
        header("Location: ../login.php");
    } else {
        echo "Error: " . $query . "<br>";
    }
}else{
    // Iniciar sesión
    session_start();

    // Establecer el mensaje de alerta en una variable de sesión
    $_SESSION['mensaje_alerta'] = "<span>ERROR: ¡Las contraseñas no coinciden!</span>";

    // Redirigir a registrar.php
    header("Location: ../registrar.php");
    exit();
}
?>