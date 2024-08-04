<!-- Atividade finalizada -->
<?php

$numero1 = '';
$numero2 = '';
$soma = '';

if(isset($_POST["btn_somar"]))
{
    $numero1 = trim($_POST['n1']);
    $numero2 = trim($_POST['n2']);
    if($numero1==""||$numero2==""){echo "Preencha todos os campos !";}
    else{$soma = $numero1 + $numero2;}
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
    <h1>Somar Numeros com condição</h1>
    <form action="calculo.php" method="post">
        <input placeholder="Digite o nomero 1" name="n1" value="<?= isset($numero1)?$numero1:""?>">
        <input placeholder="Digite o nomero 2" name="n2" value="<?= isset($numero2)?$numero2:""?>">
        <button name="btn_somar">Somar</button>
        <input disabled value="<?= isset($soma)?$soma:"" ?>">
</body>
</html>