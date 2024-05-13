<?php
<<<<<<< HEAD
include("../back/jsonReader.php");
include("../back/dataBaseConnection.php");
function reloadList() {
    $dirArray = array_diff(scandir("../JSON"),array('.','..'));
    foreach($dirArray as $element){
        $issuePath = "../JSON/".$element;
        $issue = readOne($issuePath);
        echo "<li><button>".$issue["IssueID"]."</button></li>";
    }
}
=======
include("../back/jsonWriter.php");
include("../back/jsonReader.php");
>>>>>>> 5776b13406458f9f34bfb2be9318247082002291
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro de atención a clientes</title>
    <link rel="stylesheet" href="../front/styles/dashboard.css">
</head>
<body>
<<<<<<< HEAD
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
                </tr>
                <tbody>
                    <?php
                    reloadCatalog($catalogoBD);
                    ?>
                </tbody>
            </thead>
        </table>
    </div>
</div>
<div class="AtencionContainer">
    <div class="lista">
        <ul>
            <?php
            reloadList();
            ?>
        </ul>
    </div>
=======
    <?php include("header.php");?>
<div class="catalogoContainer">
    <table class="catalogo">
        <tr>
            <th class="catalogoHeader">ID</th>
            <th class="catalogoHeader">Modelo</th>
            <th class="catalogoHeader">Ubicacion</th>
        </tr>
        <?php
        
        ?>
    </table>
>>>>>>> 5776b13406458f9f34bfb2be9318247082002291
</div>
</body>
</html>
