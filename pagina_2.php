<?php

if
    (isset($_GET["nome_tartaruga"]) && isset($_GET["idade"]) && 
    $_GET["nome_tartaruga"] != "" && $_GET["idade"] != ""

){

    $nome = $_GET["nome_tartaruga"];
    $idade = $_GET["idade"];

}else{
    header("location: pagina_1.php");
    exit;

}


?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Nome da Tartaruga: 
</body>
</html>