<?php
//Para escribir un json, se requieren varios parametros ordenado de la forma($IDCliente,$Nombre,$Correo,$Contenido)
function write($IDCliente,$Nombre,$Correo,$Contenido){
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
    $path = "JSON/".$issueID.".json";
    file_put_contents($path,$json);
}

?>