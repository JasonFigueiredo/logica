<?php
$num1 = '';
$num2 = '';
$num3 = '';
$soma = '';

if(isset($_POST["btn_somar"]))
{
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $num3 = $_POST['n3'];

    $soma = ( $num1 + $num2 + $num3 ) / 3;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3 digitos</title>
</head>
    <body>
        <h1>Calculadora de divisão</h1>
        <form action="ex1_logica.php" method="post">
            <label>Valor 01:</label>
            <input placeholder="Digite o nomero 1" name="n1" value="<?= $num1 ?>"><br>
            <label>Valor 02:</label>
            <input placeholder="Digite o nomero 2" name="n2" value="<?= $num2 ?>"><br>
            <label>Valor 03:</label>
            <input placeholder="Digite o nomero 3" name="n3" value="<?= $num3 ?>"><br>
            <button name="btn_somar">Valor</button>
            <input disabled value="<?= $soma ?>">
    </body>
</html>