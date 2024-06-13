<?php

if(isset($_POST["btn-enviar"])){

    $nome= trim($_POST["nome_tartaruga"]);
    $idade= trim($_POST["idade"]);

    if($nome == "" || $idade == "" )
        echo "Preencher os campos Acima";
    else {
    
        header("location: pagina_2.php?nome_tartaruga=$nome&idade=$idade");
        exit;
    }
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
    <form action="pagina_2" method="post">
        <input name="nome_tartaruga" placeholder="Digite o nome Aqui">
        <input name="idade" placeholder="Digite a idade Aqui">
        <button name="btn_enviar">Enviar</button>
    </form>
</body>
</html>
