<?php
    $salario = "";
    $aumento = "";

    if(isset($_POST["calcularAumento"])){
    
        $salario = trim($_POST["salario"]);
        $aumento = trim($_POST["aumento"]);

        if($salario ==""|| $aumento==""){echo "Preencha todos os campos";}
        else{
            $resultado = $salario+(($salario*$aumento)/100);
            $diferença = $resultado - $salario;
            $classificação = "";

            if($diferença <= 100){$classificação = "Aumento Nivel 1";}
            if($diferença >= 101 && $diferença <= 200){$classificação = "Aumento Nivel 2";}
            if($diferença>= 201 && $diferença <= 300){$classificação = "Aumento Nivel 3";}
            if($diferença >= 301 && $diferença <= 400){$classificação = "Aumento Nivel 4";}
            if($diferença >= 401){$classificação = "Aumento Nivel 5";}
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aumento Salario</title>
</head>

<body>
    <p>4) Crie uma página no qual o usuário digite seu salário e a porcentagem de aumento. <br> 
    Exemplo:
        Salario: _______
        Aumento: _______</p>

    <p>Após o clique do botão "Calcular", deverá ser calculado a porcentagem aumentada <br>
        (fórmula: salario_final = salario + (salario * aumento) / 100) e exibir o salário final já com o aumento. <br>
        Verifique e mostre a classificação deste aumento segundo a tabela abaixo: <br>
        0 - 100 : Aumento Nivel 1 <br>
        101 - 200 : Aumento Nivel 2 <br>
        201 - 300 : Aumento Nivel 3 <br>
        301 - 400 : Aumento Nivel 4 <br>
        acima de 400: Aumento Nivel 5</p>

    <form action="ex4_operadores.php" method="post">
        <label>Salario atual: </label>
        <input type="number" name="salario" value="<?= isset($salario)?$salario:""?>">
        <label>Aumento: </label>
        <input type="number" name="aumento" value="<?= isset($aumento)?$aumento:""?>"><br>
        <button name="calcularAumento">calcular aumento</button>
        <input disabled value="<?= $resultado ?>">
        <input disabled value="<?= $classificação ?>">

    </form>
</body>

</html>