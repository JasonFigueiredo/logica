<?php
if(isset($_POST["btn_enviar"])) {
    $nome = $_POST["nome_dog"];
    $idade = $_POST["idade"];

    echo "O Nome do dog é: " . $nome . "<br>Idade do Dog: " . $idade;
}
?>
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post"  action="formulario.php">
        <label>Digite o nome do Seu Cachoro</label>
        <input name="nome_dog" placeholder="Digite aqui...">
        <label>Digite a idade do seu Cachorro</label>
        <input name="idade" placeholder="Digite aqui...">
        <button name="btn_enviar">Enviar</button>
    </form>
</body>
</html>