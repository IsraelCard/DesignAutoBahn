<?php
if(array_key_exists('button1', $_POST)) { 
    deleteElement(); 
} 

function deleteElement(){
    $att = unlink("../JSON/".$_GET["IssueID"].".json");
    if ($att){
        header("Location:../dashboard.php");
    }
    else{
        echo "ALGO SALIO MAL";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmar</title>
    <link rel="stylesheet" href="../styles/dashboard.css">
</head>
<body>
    <div class="AtencionContainer">
        <h1>ATENCIÓN: Esta acción es irreversible. ¿Desea continuar?</h1><br>
        <a href="javascript:history.go(-1)"><button class="borrar">Cancelar</button></a>
        <form method="post"> 
        <input type="submit" name="button1"
                class="button" value="Aceptar" /> 
</form>
    </div>
</body>
</html>