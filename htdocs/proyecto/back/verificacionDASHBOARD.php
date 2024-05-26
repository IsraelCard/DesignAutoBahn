<?php
//Añade la consulta a la fila de todos los usuarios
    $verificador = new mysqli( "localhost","root","","inventario");
    $valorPASS = $_POST["ID_PERSONAL"];
    $query = mysqli_query($verificador,"select ID_personal from personal;");
    $validado = false;
//Revisa si el usuario insertado existe, y si coincide con su contraseña
while($row = mysqli_fetch_array($query)){
if($row["ID_personal"]==$valorPASS){

    //El usuario y contraseña es correcto
    echo "USUARIO CORRECTO";
    $validado = true;
    header("location: ../dashboard.php?ID_PERSONAL=".$_POST['ID_PERSONAL']);
    break;
}
}
if($validado == false){
    header("location: loginDASHBOARD.php");
    //Algún dato es incorrecto
    echo "USUARIO INCORRECTO";
}
?>
