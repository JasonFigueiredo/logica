<?php

if(isset($_POST["btn_enviar"])){
    $nome= trim($_POST["nome"]);
    $peso= trim($_POST["peso"]);
    $altura= trim($_POST["altura"]);

    if($nome == "")
        echo "Preencha o Seu nome";
    else if($peso == "")
        echo "Preencha o Seu peso";
    else if($altura == "")
        echo "Preencher a sua Altura";
    else {
        $parametro = "nome=$nome&peso=$peso&altura=$altura";
        header("location: ex1_mostrardadosimc.php?$parametro");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo imc</title>
</head>
<body>
    <form action="ex1_pegardadosimc.php" method="post">
        <input name="nome" value="<?= isset($nome) ? $nome : ""  ?>" placeholder="Digite um Valor" >
        <input name="peso" value="<?= isset($peso) ? $peso : ""  ?>" placeholder="Digite um Valor" >
        <input name="altura" value="<?= isset($altura) ? $altura : ""  ?>" placeholder="Digite um Valor" >
        <button name="btn_enviar">Enviar</button>
    </form>
</body>
</html>