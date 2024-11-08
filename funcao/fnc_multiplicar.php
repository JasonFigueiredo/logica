<?php
require_once "funcao/fnc_exemplo.php";
$qtd = "";
$valor  = "";

if(isset($_POST['btn_calcular'])){
    $nome = trim($_POST['nome']);
    $valor = $_POST['valor'];
    $qtd = $_POST['qtd'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - Multiplicar - </title>
</head>
<body>
    <form method="post" action="fnc_multiplicar.php">
        <label for="produto">Produto:</label><br>
            <input type="text"  name="nome" value="<?= isset($nome) ? $nome : "" ?>"><br>
        <label for="valor">Valor por unidade:</label><br>
            <input type="number"  name="valor" value="<?= isset($valor) ? $valor : "" ?>"><br>
        <label for="qtd">Quantidade:</label><br>
            <input type="number" name="qtd" value="<?= isset($qtd) ? $qtd : "" ?>">

        <button name="btn_calcular"> - Somar - </button>
    </form>
</body>
</html>