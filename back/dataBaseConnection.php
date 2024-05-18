<?php
$catalogoBD = new mysqli( "localhost","root","","inventario");
function reloadCatalog($catalogoBD){
    $query = mysqli_query($catalogoBD,"select * from catalogo;");
    while($row = mysqli_fetch_array($query)){
        echo "<tr><td>".$row["ID_auto"]."</td><td>".$row["Modelo"]."</td><td>".$row["Precio"]."</td><td>".$row["Ubicacion"]."</td></tr>";
    }

}
?>