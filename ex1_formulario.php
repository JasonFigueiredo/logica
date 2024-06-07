<?php
if(isset($_POST["btn_enviar"]))
 {
    $nome = $_POST["nome_prato"];
    $descrição = $_POST["descrição"];
    $preço = $_POST["preço"];
    $ingrediente = $_POST["ingrediente"];

    echo "Nome do Prato é: " . $nome .
    "<br>Descrição: " . $descrição .
    "<br>Preço: " . $preço .
    "<br>Ingrediente: " . $ingrediente;
}
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
</head>

<body>
    <form method="post" action="ex1_formulario.php">
        <label>Nome do Prato:</label>
        <input name="nome_prato" placeholder="Digite aqui...">
        <label>Descrição:</label>
        <input name="descrição" placeholder="Digite aqui...">
        <label>Preço:</label>
        <input name="preço" placeholder="Digite aqui...">
        <label>Ingredientes:</label>
        <input name="ingrediente" placeholder="Digite aqui...">
        <button name="btn_enviar">Enviar</button>
    </form>
</body>

</html>