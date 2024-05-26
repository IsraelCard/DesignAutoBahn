<?php
$catalogoBD = new mysqli( "localhost","root","","inventario");
function reloadCatalog(){
    $query = mysqli_query($GLOBALS['catalogoBD'],"
    SELECT c.ID_auto,m.modelo as \"Modelo\",s.nombre as \"Ubicacion\",c.Precio
FROM catalogo c
JOIN sucursales s ON c.Ubicacion = s.idSucursal
JOIN modelos m ON c.Modelo = m.idModelo;");
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

function reloadPedidos(){
    $query = mysqli_query($GLOBALS['catalogoBD'],
    "SELECT p.ID_pedido,p.ID_usuario as \"Usuario\",s.nombre as \"Ubicacion\",p.estado
FROM pedidos p
JOIN sucursales s ON p.ID_sucursal = s.idSucursal;");
    while($row = mysqli_fetch_array($query)){
        echo "<tr><td>".$row["ID_pedido"]."</td><td>".$row["Usuario"]."</td><td>".$row["Ubicacion"]."</td><td>".$row["estado"]."</td></tr>";
}
}
?>