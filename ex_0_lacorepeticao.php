<?php

$nome = '';
$idade = '';
$quant = '';

if (isset($_POST["btn_contar"])) {

    $nome = $_POST["nome"];
    $idade = $_POST["idade"];
    $quant = $_POST["quant"];

    if($nome == "" || $idade == "" || $quant == ""){
        echo "Preencher todos os campos";
    } else {}
        for($i=1; $i<= $quant; $i++){
            echo "Meu nome é $nome, tenho $idade anos de idade <br>";
        }
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetir Nome</title>
</head>

<body>
    <form method="post" action="ex_0_lacorepeticao.php">
        <input name="nome" placeholder="Digite um nome" valor= "<?=isset($nome)?$nome:''?>">
        <input name="idade" placeholder="Digite sua idade" valor= "<? = isset($idade) ? $idade : '' ?>">
        <input name="quant" placeholder="Digite a quantidade" valor= "<? = isset($quant) ? $quant : '' ?>">
        <button name="btn_contar">Contar</button>
    </form>
</body>

</html>