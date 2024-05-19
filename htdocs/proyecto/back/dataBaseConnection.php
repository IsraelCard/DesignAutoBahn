<?php
$catalogoBD = new mysqli( "localhost","root","","inventario");
function reloadCatalog(){
    $query = mysqli_query($GLOBALS['catalogoBD'],"select * from catalogo;");
    while($row = mysqli_fetch_array($query)){
        if(isset($_POST["DelID"])){
            removeElement($_POST["DelID"]);
        }
        echo "<tr><td>".$row["ID_auto"]."</td><td>".$row["Modelo"]."</td><td>".$row["Precio"]."</td><td>".$row["Ubicacion"]."</td>
        <td>
        <form method=\"post\">
        <input type=\"hidden\" name=\"DelID\" value=\"".intval($row["ID_auto"])."\">
        <input type=\"submit\" class=\"borrar\" value=\"Borrar\" >
        </form>
        </tr>";
    }

}

if(isset($_POST["addItem"])){
    addElement();
}
function addElement(){
    $Model = $_POST["addModel"];
    $Precio = $_POST["addProze"];
    $Ubi = $_POST["addUbi"];
    $query = mysqli_query($GLOBALS['catalogoBD'],"insert into catalogo(Modelo,Precio,Ubicacion) values('$Model','".floatval($Precio)."','$Ubi')");
    if ($query){
        header("refresh: 0");
    }
}

function removeElement($ID){
    $query = mysqli_query($GLOBALS['catalogoBD'],"DELETE FROM catalogo WHERE ID_auto =".intval($ID).";");
    if ($query){
        header("refresh: 0");
    }
}

?>