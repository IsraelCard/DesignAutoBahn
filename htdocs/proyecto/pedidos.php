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

    <!--comprobar si la sesion de un usuario esta inciada, en caso de no existir mandarlo a login-->
    <?php 
        if(!isset($_SESSION['user'])){
            header("Location: loginForm.php");
        }
    ?>

    <div class="cont-cuenta">        
        <!--Contenedor de todos los autos del usuario-->
        <div class="cont-pedidos">
            <h4>Mis autos</h4>

            <!--Contenedor del auto-->
            <?php
                $iduser=$_SESSION['id'];//ID usaurio

                $bd = new mysqli("localhost","root","","inventario");//BD conexion
                
                //Consulta del pedido
                $query = "SELECT c.Modelo as 'nombre', c.imagen as 'imagen', p.ID_pedido, s.nombre as 'sucursal', s.ubicacion, p.estado
                FROM pedidos as p 
                JOIN sucursales as s
                JOIN catalogo as c 
                ON p.ID_sucursal = s.ID_sucursal AND p.ID_auto = c.ID_auto
                where ID_usuario = $iduser;";

                $result = $bd->query($query);
                //Imprimir el pedido en caso de existir
                if ($result->num_rows > 0) {
                    while ($datos=$result->fetch_assoc()) {
            ?>      
                        <div class="pedidos">
                            <div class="pedido">
                                <h6><?php echo $datos["nombre"]?></h6>
                                <img src="assets/images/featured-cars/<?php echo $datos["imagen"]?>" alt="auto">
                            </div>
    
                            <div class="info-pedido">
                                <p>Id Pedido: <?php echo $datos["ID_pedido"]?></p>
                                <p>Sucursal: <?php echo $datos["sucursal"]?></p>
                                <p>Ubicacion: <?php echo $datos["ubicacion"]?></p>
                                <p>Estado: <?php echo $datos["estado"]?></p>
                            </div>
                        </div>
            <?php
                    }
                }else{
            ?>
                        <!--En caso de no existir autos-->
                        <div class="pedidos-vacio">
                            <img src="assets/images/icons/triste.png"><br>
                            <span>Lo sentimos, parece que no cuentas con ningun auto</span><br>
                            <span>Puedes abrir el catálogo para conocer algun auto de tu gusto.</span>
                        </div>
            <?php
                }
            ?>
        </div>

        <!--Contenedor de datos del usuario-->
        <div class="cont-user">
            <h4>Mi cuenta</h4>

            <!--Datos-->
            <p>Id: <?php echo $_SESSION['id'] ?></p>
            <p>Email: <?php echo $_SESSION['email'] ?></p>
            <p>Usuario: <?php echo $_SESSION['user'] ?></p>

            <a href="catalogo.php">Catálogo</a>
            <a href="back/logout.php" class="logout">Cerrar Sesión</a>
        </div>
    </div>

    <?php include('footer.php') ?>
</body>
</html>