<?php

$numero1 = '';
$numero2 = '';
$soma = '';

if(isset($_POST["btn_somar"]))
{
    $numero1 = $_POST['n1'];
    $numero2 = $_POST['n2'];
    $soma = $numero1 + $numero2;
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="calculo.php" method="post">
        <input placeholder="Digite o nomero 1" name="n1" value="<?php echo $numero1 ?>">
        <input placeholder="Digite o nomero 2" name="n2" value="<?= $numero2 ?>">
        <button name="btn_somar">Somar</button>
        <input disabled value="<?= $soma ?>">
</body>
</html>