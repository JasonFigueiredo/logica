<?php
if(isset($_POST["btn_enviar"]))
 {
    $nome = $_POST["nome_empresa"];
    $site = $_POST["site"];
    $face = $_POST["face"];
    $insta = $_POST["insta"];
    $descricao = $_POST["descricao"];

    echo "Nome da empresa é: " . $nome .
     "<br>site: " . $site .
      "<br>face: " . $face .
       "<br>insta: " . $insta .
        "<br>descricao: " . $descricao;
}
?>
<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Industria</title>
</head>

<body>
    <form method="post" action="ex2_formulario.php">
        <label>Nome da Empresa:</label>
        <input name="nome_empresa" placeholder="Digite aqui...">
        <label>Site:</label>
        <input name="site" placeholder="Digite aqui...">
        <label>Facebook:</label>
        <input name="face" placeholder="Digite aqui...">
        <label>Instagran:</label>
        <input name="insta" placeholder="Digite aqui...">
        <label>Descrição:</label>
        <input name="descricao" placeholder="Digite aqui...">
        <button name="btn_enviar">Enviar</button>
    </form>
</body>

</html>