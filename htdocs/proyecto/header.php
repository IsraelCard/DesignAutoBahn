<style>
*{
    margin: 0;
    padding: 0;
}

header{
    display: flex;
    background-color: #2a2d54;
    padding: 10px 9vw;
    align-items: center;
    justify-content: space-between;
}

.logo{
    width: 80px;
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
    font-weight: bold;
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
@media (max-width: 700px) {
    header {
        display:block;
        flex-direction: column; /* Cambia la dirección de los botones a vertical */
        align-items: center; /* Centra los botones verticalmente */
        margin-bottom: 5px;
    }

    nav a {
        display:block;
        flex-direction: column; /* Cambia la dirección de los botones a vertical */
        align-items: center; /* Centra los botones verticalmente */
        margin-bottom: 10px;

    }

    /* Elimina el margen inferior del último botón */
    header nav a:last-child {
        margin-bottom: 0;
    }
}

</style>
<!-- Contenedor -->
<header>
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
