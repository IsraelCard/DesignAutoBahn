<?php
//Para escribir un json, se requieren varios parametros ordenado de la forma($IDCliente,$Nombre,$Correo,$Contenido)
function write($IDCliente,$Nombre,$Correo,$Contenido){
    $array = [
        "IDCliente" => "$IDCliente",
        "Nombre" => "$Nombre",
        "Correo" => "$Correo",
        "Contenido" => "$Contenido"
    ];
    $ini = random_int(100,999);
    $json = json_encode($array,JSON_PRETTY_PRINT);
    $path = "JSON/".$array["IDCliente"].$ini.".json";
    file_put_contents($path,$json);
}

?>