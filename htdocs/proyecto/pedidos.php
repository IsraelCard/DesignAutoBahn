<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi cuenta</title>    
    <link rel="stylesheet" href="styles/index.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="styles/pedidos.css">
</head>
<body>
    <?php include("header.php") ?>

    <div class="cont-cuenta">        
        <!--Contenedor de todos los autos del usuario-->
        <div class="cont-pedidos">
            <h4>Mis autos</h4>

            <!--Contenedor del auto
            <div class="pedidos">
                <div class="pedido">
                    <h6>VOLKSWAGEN CADDY</h6>
                    <img src="http://autostocksolutions.free.nf/assets/images/featured-cars/fc1.jpeg" alt="auto-img">
                </div>

                <div class="info-pedido">
                    <p>Id Pedido:</p>
                    <p>Sucursal:</p>
                    <p>Ubicacion:</p>
                    <p>Estado:</p>
                </div>
            </div>
-->

            <!--En caso de no existir registro-->
            <div class="pedidos-vacio">
                <img src="assets/images/icons/triste.png"><br>
                <span>Lo sentimos, parece que no cuentas con ningun auto</span><br>
                <span>Puedes abrir el catálogo para conocer algun auto de tu gusto.</span>
            </div>
        </div>

        <!--Contenedor de datos del usuario-->
        <div class="cont-user">
            <h4>Mi cuenta</h4>

            <!--Datos-->
                <p>Id:</p>
                <p>Email:</p>
                <p>Usuario:</p>

            <a href="catalogo.php">Catálogo</a>
            <a href="back/logout.php" class="logout">Cerrar Sesión</a>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>
</html>