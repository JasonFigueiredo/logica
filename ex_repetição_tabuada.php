<?php
if(isset($_POST["btn_calcular"])){
    $tabuada = trim($_POST["tabuada"]);
    $ir_ate = trim($_POST["ir_ate"]);
    if ($tabuada == "" || $ir_ate == "")
    echo "Preencher todos os campos";
    else {
        for ($i=1; $i<=$ir_ate; $i++){
        $calculo = $tabuada * $i;
        echo "$tabuada X $i = $calculo" . "\n";
            $mostrar = $ir_ate . "$tabuada X $i = $calculo";
        }
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex_repetição_tabuada.php" method="post">
        <label>Tabuada: </label>
        <input name="tabuada" value="<?=isset($tabuada)?$tabuada:""?>">
        <label>Ir Até: </label>
        <input name="ir_ate" value=" <?=isset($ir_ate)?$ir_ate:""?>">
        <button name="btn_calcular">Calcular</button>
    </form>

    <?php if (isset($_mostrar)) { ?>
        <textarea disabled rows ="<? $ir_ate ?>"> <?= $mostrar ?> </textarea>
    <?php } ?>

</body>
</html>