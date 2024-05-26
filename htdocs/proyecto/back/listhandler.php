<?php
$catalogoBD = new mysqli( "localhost","root","","inventario");
function loadModelos(){
    $query = mysqli_query($GLOBALS['catalogoBD'],"select * from modelos;");
    while($row = mysqli_fetch_array($query)){
        echo "<option value=\"".$row["idModelo"]."\">".$row["modelo"]."</option>";
    }
}

function loadSucursales(){
    $query = mysqli_query($GLOBALS['catalogoBD'],"select * from sucursales;");
    while($row = mysqli_fetch_array($query)){
        echo "<option value=\"".$row["idSucursal"]."\">".$row["nombre"]."</option>";
    }
}
?>