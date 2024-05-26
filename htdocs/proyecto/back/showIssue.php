
<?php
include("jsonReader.php");
$id = $_GET["IssueID"];
$string = readOne("../JSON/".$_GET["IssueID"].".json");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>
    <div class="AtencionContainer">
        <h2>Id de cliente: <?php echo $string["IDCliente"]?></h2>
        <h2>Nombre: <?php echo $string["Nombre"]?></h2>
        <h2>Correo de contacto:<a href="mailto:<?php echo $string["Correo"];?>?subject=Nos ponemos en contacto contigo"> <?php echo $string["Correo"]?></a></h2>
        <h2>Descripción:</h2><br>
        <p><?php echo $string["Contenido"]?></p>
        <form action="jsonEreaser.php" method="get">
            <input type="hidden" name="IssueID" value="<?php echo $id;?>">
            <input type="submit" value="Resolver">
        </form>
        <a href="javascript:history.go(-1)"><button class="borrar">Cancelar</button></a>

    </div>
</body>
</html>