<?php
    //Conexion a la base de datos
    $bd = new mysqli("localhost","root","","usuarios");

    //Valores a insertar
    $valoremail =  $_POST["email"];
    $valorname = $_POST["name"];
    $valorpass = $_POST["pass1"];

    //Conocer si el correo ya ha sido utilizado (no se puede usar mas de una vez el mismo correo)
    $query=mysqli_query($bd,"SELECT * FROM usuarios WHERE correo = '".$valoremail."';");
    
    if ($query->num_rows>0) {
        // Iniciar sesión para enviar alerta o mensaje
        session_start();

        // Establecer el mensaje de alerta en una variable de sesión
        $_SESSION['mensaje_alerta'] = '<span class="error">Correo ya usado, introduce otro!</span>';
                            
        // Redirigir a login.php
        header("Location: ../registrar.php");
        exit();
    }else {
        //Insertar datos en la base de datos usuarios
        $query=mysqli_query($bd,"INSERT INTO usuarios(correo,nombre,contraseña) VALUES ('$valoremail','$valorname','$valorpass');");

        // Iniciar sesión para enviar alerta o mensaje
        session_start();
            
        // Establecer el mensaje de exito en una variable de sesión
        $_SESSION['mensaje_alerta'] = '<span class="exito">Cuenta creada con exito!</span>';
            
        // Redirigir a login.php
        header("Location: ../loginForm.php");
        exit();
    }
?>