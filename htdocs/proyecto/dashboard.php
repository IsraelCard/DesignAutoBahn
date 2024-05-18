<?php
include("back/jsonReader.php");
include("back/dataBaseConnection.php");
include("back/LoadDashboard.php");
//Obtener POST de inicio de sesion, de lo contrario sacar a 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de atención a clientes</title>
    <link rel="stylesheet" href="styles/dashboard.css">
</head>
<body>
    <div><header><h1>Panel de control</h1></header></div>
<div class="cuerpo">
<div class="AtencionContainer">
    <div class="Catalogo">
        <table>
            <caption>Catálogo</caption>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Modelo</th>
                    <th>Precio</th>
                    <th>Ubicación</th>
                    <th>Acciones</th>
                </tr>
                <tbody>
                    <?php
                    reloadCatalog();
                    ?>
                </tbody>
            </thead>
        </table>
        <!--TODO: Botones de añadir, modificar y eliminar elementos-->
    </div>
</div>
<div class="AtencionContainer">
    <div class="lista">
        <div><span>Reportes y problemas</span></div>
            <div class="grid-container">
                <?php
                reloadList();
                ?>
            </div>
        </div>
    </div>
    <div class="AtencionContainer">
    <form action="" method="post" class="AddForm">
        Modelo: <input type="text" name="addModel" placeholder="Inserta el modelo"> <br>
        Precio: $<input type="text" name="addProze" placeholder="Inserta el precio">Mxn <br>
        Ubicacion <input type="text" name="addUbi" placeholder="Inserta la ubicacion"> <br>
        <input type="submit" name="addItem" value="Añadir">
    </form>
</div>
</div>
</body>
</html>
