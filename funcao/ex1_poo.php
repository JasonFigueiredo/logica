<?php
$resultado = false;
$op="";
if(isset($_POST["btn_value"])){
 $op = $_POST["opcao"];
 $qt = $_POST["opcao"];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Combustivel</title>
</head>
<body>
    <h3>Selecione o tipo de combustivel que deseja abastecer.</h3>
    <label for="combustiveis">Tipo de combustivel desejado: </label>
    <select name="combustiveis">
        <option value="">Selecione</option>
        <option value="1" <?= $op == 1 ? "selected" : "" ?>>Etanol</option>
        <option value="2"<?= $op == 2 ? "selected" : "" ?> >Gasolina</option>
    </select>
    <hr>
    <form action="ex1_poo.php" method="post">
        <label>Quantidade de litros desejado:</label>
        <input type="number" name="litros" value="<?= isset($litros)?$litros:""?>">
        <button name ="btn_value">Calcular</button><br>
        <br>
        <label>Valor total:</label>
        <input disabled value ="<?= $soma ?>">
    </form>

</body>
</html>