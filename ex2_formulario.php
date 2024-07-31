<?php
    if(isset($_POST["btn_enviar"])){
        $nome_empresa = $_POST["nome_empresa"];
        $site = $_POST["site"];    
        $face = $_POST["face"];    
        $insta = $_POST["insta"];    
        $descr = $_POST["desc"];    

        echo "Nome da empresa é: " . $nome_empresa . "<br>" .
         "Site da empresa: " . $site . "<br>" .
         "Facebook da empresa: " . $face . "<br>" .
         "Instagram da empresa: " . $insta . "<br>" .
         "Descrição da empresa: " . $descr;
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Empresa</title>
</head>
<body>
    <form action="ex2_formulario.php" method="post">
        <label>Nome da empresa:</label>
        <input type="text" name="nome_empresa"><br>
        <label>Site: </label>
        <input type="text" name="site"><br>
        <label>Facebook: </label>
        <input type="text" name="face"><br>
        <label>Instagram: </label>
        <input type="text" name="insta"><br>
        <label>Descrição:</label>
        <input type="text" name="desc"><br>
        <button name="btn_enviar"> Enviar dados </button>
    </form>
</body>
</html>