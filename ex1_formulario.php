<!-- Atividade Finalizada -->
<?php
    if(isset($_GET["btn_enviar"])){
        $nome = $_GET["nome_prato"];
        $descr = $_GET["descr"];
        $price = $_GET["preco"];
        $ingred = $_GET["ingre"];

        echo "Nome do prato: " . 
        $nome . "<br>" . "Observações Sobre o prato: " .
        $descr . "<br>" ."Preço do prato: " . 
        $price . "<br>" . "Ingredientes do Prato: " . 
        $ingred;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardapio</title>
</head>
<body>
    <form action="ex1_formulario.php" method="get">
        <label>Nome do Prato: </label>
        <input type="text" name="nome_prato" placeholder="Digite aqui"><br>
        <label>Observações: </label>
        <input type="text" name="descr" placeholder="Digite aqui"><br>
        <label>Preço do prato: </label>
        <input type="number" name="preco" placeholder="Digite aqui"><br>
        <label>Ingredientes: </label>
        <input type="text" name="ingre" placeholder="Digite aqui"><br>
        <button name="btn_enviar">-- Fazer Pedido --</button>
    </form>
</body>
</html>