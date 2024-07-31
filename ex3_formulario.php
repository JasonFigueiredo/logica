<?php
if(isset($_POST["btn_enviar"]))
{
    $nome = $_POST["nome"];
    $ano = $_POST["ano"];
    $editora = $_POST["editora"];
    $qtd = $_POST["qtd"];
    $autores = $_POST["autores"];
    $valor = $_POST["valor"];
    $resumo = $_POST["resumo"];

    echo "Nome do Livro: " . $nome . "<br>" .
    "Ano: " . $ano . "<br>" .
    "Editora: " . $editora . "<br>" .
    "Qtd de Paginas: " . $qtd . "<br>" .
    "Autores: " . $autores . "<br>" .
    "Valor: " . $valor . "<br>" .
    "Resumo: " . $resumo;
}
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livros</title>
</head>

<body>
    <form method="post" action="ex3_formulario.php">
        <label>Nome do Livro:</label>
        <input name="nome" placeholder="Digite..."><br>
        <label>Ano:</label>
        <input name="ano" placeholder="Digite..."><br>
        <label>Editora:</label>
        <input name="editora" placeholder="Digite..."><br>
        <label>Qtd de páginas:</label>
        <input name="qtd" placeholder="Digite..."><br>
        <label>Autores:</label>
        <input name="autores" placeholder="Digite..."><br>
        <label>Valor:</label>
        <input name="valor" placeholder="Digite..."><br>
        <label>Resumo:</label>
        <input name="resumo" placeholder="Digite..."><br>
        <button name="btn_enviar">Enviar</button>
    </form>
</body>

</html>