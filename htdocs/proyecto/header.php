<style>
    *{
        margin: 0;
        padding: 0;
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }

    header{
        background-color: #2a2d54;
        padding: 15px;
    }

    .header-margen{
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin: auto;
        max-width: 1170px;
    }

    .logo{
        width: 50px;
        border-radius: 4pt;
        transition: 500ms;
        padding: 7px;
    }

    .logo:hover{
        box-shadow:0 0 15px rgb(0,0,0,0.4);
        padding: 7px;
    }

    nav a{
        text-decoration: none;
        font-size: large;
        color: white;
        font-weight: 700;
        font-size: 20px;
        margin-left: 5px;
        transition: 500ms;
        padding: 7px;
        border-radius: 4pt;
    }

    nav .login{
        background-color: #394166;
    }

    nav a:hover{
        background: none;
        box-shadow:0 0 15px rgb(0,0,0,0.4);
        text-decoration: none;
        color: whitesmoke;
        font-size: 20px;
        font-weight: bold;
        padding: 7px;
    }

    /* Media query para pantallas de 500px o menos */
    @media (max-width: 730px) {
        .header-margen {
            flex-direction: column; /* Cambia la dirección de los botones a vertical */
            align-items: center; /* Centra los botones verticalmente */
            margin-bottom: 5px;
        }

        nav{
            width: 200px;
            justify-content: center;
        }

        nav a {
            text-align: center;
            display: block;
            flex-direction: column; /* Cambia la dirección de los botones a vertical */
            align-items: center; /* Centra los botones verticalmente */
            margin-bottom: 5px;
            width: 90%;
        }

        /* Elimina el margen inferior del último botón */
        header nav a:last-child {
            margin-bottom: 0;
        }
    }
</style>

<?php
    //Iniciar sesion
    session_start();
?>

<!-- Contenedor -->
<header>
    <div class="header-margen">
        <!-- logo -->
        <a class="logo" href="index.php">
            <img src="assets/images/logo.png" alt="FASTCAR">
        </a>
    
        <!-- direccion de cada boton-->
        <nav>
            <a href="index.php">INCIO</a>
            <a href="catalogo.php">CATÁLOGO</a>
            <a href="contacto.php">AYUDA</a>

            <!--Imprimir boton de inciar sesion si la sesion user no tiene ningun valor-->
            <?php
                if (isset($_SESSION['user'])) {
                    echo '<a href="pedidos.php" class="login">'.htmlspecialchars($_SESSION['user']).'</a>';
                }else{
                    echo '<a href="loginForm.php" class="login">INICIAR SESIÓN</a>';
                }
            ?>
        </nav>
    </div>
</header>
