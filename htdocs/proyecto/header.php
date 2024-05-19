<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu+Sans:ital,wght@0,100..800;1,100..800&display=swap');

    *{
        margin: 0;
        padding: 0;
        font-family: "Ubuntu Sans", sans-serif;
    }

    header{
        display: flex;
        background-color: rgb(36, 36, 36);
        margin: 0;
        padding: 25px;
        align-items: center;
        justify-content: space-between;
    }

    nav a{
        text-decoration: none;
        font-size: large;
        color: whitesmoke;
        font-weight: bold;
        font-size: 19px;
        margin-left: 5px;
        transition: 500ms ease-in-out;
        padding: 7px;
        border-radius: 4pt;
    }

    .login{
        background-color: rgb(65, 65, 65);
        padding: 7px;
        border-radius: 4pt;
    }

    nav a:hover{
        background-color: rgb(89, 89, 89);
    }

    .logo{
        width: 30px;
    }
</style>

<!-- Contenedor -->
<header>
        <!-- logo -->
        <a class="logo" href="index.php">
            <img src="" alt="">
        </a>
    
        <!-- direccion de cada boton-->
        <nav>
            <a href="index.php">INCIO</a>
            <a href="#">CATÁLOGO</a>
            <a href="contacto.php">AYUDA</a>

            <!--Imprimir boton de inciar sesion si la sesion user no tiene ningun valor-->
            <?php
                //Iniciar sesion
                session_start();

                //Condicion
                if (!isset($_SESSION['user'])) {
                    echo '<a href="loginForm.php" class="login">INICIAR SESIÓN</a>';
                }else{
                    echo '<a href="back/logout.php" class="login">'.htmlspecialchars($_SESSION['user']).'</a>';
                }
            ?>
        </nav>
</header>