<?php
include("back/jsonReader.php");
include("back/dataBaseConnection.php");
include("back/LoadDashboard.php");
if(empty($_GET["ID_PERSONAL"])){
    header("Location: back/loginDASHBOARD.php");
}
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
            <h2>Catálogo</h2>
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
    </div>
</div>
<div class="AtencionContainer">
    <div class="lista">
        <div><h2>Reportes y problemas</h2></div>
            <div class="grid-container">
                <?php
                reloadList();
                ?>
            </div>
        </div>
    </div>
    <div class="AtencionContainer">
    <form action="" method="post" class="AddForm">
        <h2>Añadir inventario</h2>
        <h3>Modelo:</h3> <input type="text" name="addModel" placeholder="Inserta el modelo"> <br>
        <h3>Precio:</h3>$<input type="text" name="addProze" placeholder="Inserta el precio">Mxn <br>
        <h3>Ubicacion</h3> <input type="text" name="addUbi" placeholder="Inserta la ubicacion"> <br>
        <input type="submit" name="addItem" value="Añadir" class="input">
    </form>
</div>
</div>
</body>
</html>
