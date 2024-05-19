<?php
//Para escribir un json, se requieren varios parametros ordenado de la forma($IDCliente,$Nombre,$Correo,$Contenido)
    if(empty($_POST["IDCLiente"])){
        $IDCliente = 'Guest';
    }
    else{
        $IDCliente = $_POST["IDCLiente"];
    }
    $Nombre = $_POST["Nombre"];
    $Correo = $_POST["Correo"];
    $Contenido = $_POST["Contenido"];

    $ini = random_int(100,999);
    $issueID = $IDCliente.$ini;
    $array = [
        "IssueID" => "$issueID",
        "IDCliente" => "$IDCliente",
        "Nombre" => "$Nombre",
        "Correo" => "$Correo",
        "Contenido" => "$Contenido"
    ];
    $json = json_encode($array,JSON_PRETTY_PRINT);
    $path = "../JSON/".$issueID.".json";
    file_put_contents($path,$json);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto</title>
</head>
<body>
    <div><h1>Gracias por ponerse en contacto, le enviaremos un correo a la direccion indicada</h1></div>
    <form action="../index.php">
        <input type="submit" value="Volver al inicio">
    </form>
</body>
<style>
    div{
        width: 100vw;
        background-color: #539256;
        top: 0px;
    }
    h1{
        padding: 30px;
        font-weight: bolder;
        font-size: larger;
        color: aliceblue;        
    }
    input[type=submit]{
        display: block;
    text-align: center;
    width: 10%;
    margin-bottom: 15px;
    font-size: 17px;
}
</style>
</html>