<?php
    require_once "Classe/IMC.php";

    $imc = false;

    if(isset($_POST['btn_calculo'])){

    $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);

    if (!validar($peso) || !validar($altura))
        echo 'Preencher corretamente os Campos';
    else {
        $objIMC = new IMC();
        $imc = $objIMC -> CalcularIMC($peso, $altura);
        $classificacao = $objIMC -> ClassificaçãoPeso($imc);

        echo    "Seu IMC é $imc, E sua classificação é $classificação";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
</head>
<body>
    <form action="imc_poo.php" method="post">
        <label>Peso:</label>
        <input type="number" name="peso" value="<?= $peso?>">
        <label>Altura:</label>
        <input type="text" name="altura" value="<?= $altura?>">
        <button name="btn_calculo">Calcular IMC</button>
    </form>
</body>
</html>