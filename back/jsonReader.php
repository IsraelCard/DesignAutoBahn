<?php
//El parametro issue es la RUTA del archivo
function readOne($issue){
    //ALERTA: La funcion regresa un ARREGLO, que no puede ser usado directamente en un echo, ya sea utilizar los datos individualmente 
    //o convertir el arreglo a String ANTES de usar un echo
    $json = file_get_contents($issue);
    $string = json_decode($json,true);
    return $string;
}
?>