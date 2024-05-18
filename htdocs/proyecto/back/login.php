<?php
    //Conexion a la BD
    $bd = new mysqli("localhost","root","","usuarios");

    //Valores de inicio de sesion
    $valoremail =  $_POST["email"];
    $valorpass = $_POST["pass"];

    //Consulta de los valores email y password a la BD
    $query=mysqli_query($bd,"SELECT * FROM usuarios WHERE correo = '".$valoremail."' AND contraseña = '".$valorpass."';");

    //Condicion en caso de existir y coincidir
    if ($query->num_rows>0) {
        //Asignar valores del usuario
        $user = $query->fetch_assoc();
        
        //Iniciar sesion
        session_start();

        //Asignar el nombre de usuario a la sesion user
        $_SESSION['user'] = $user['nombre'];

        //Redirigir a index.php
        header("Location: ../index.php");
        exit();
    }
    else{
        // Iniciar sesión para enviar mensaje
        session_start();
    
        // Establecer el mensaje de alerta en una variable de sesión
        $_SESSION['mensaje_alerta'] = '<span class="error">Usuario o contraseña incorrecta!</span>';
    
        // Redirigir a login.php
        header("Location: ../loginForm.php");
        exit();
    }
?>