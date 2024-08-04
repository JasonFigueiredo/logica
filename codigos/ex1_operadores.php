<!-- Atividade Finalizada -->
<?php
    $n1 = "";
    $n2 = "";
    $n3 = "";
    $n4 = "";
    $n5 = "";

    if(isset($_POST["btn_calcular"])){

        $n1 = trim($_POST["n1"]);
        $n2 = trim($_POST["n2"]);
        $n3 = trim($_POST["n3"]);
        $n4 = trim($_POST["n4"]);
        $n5 = trim($_POST["n5"]);
        
        if ($n1 ==""||$n2 ==""||$n3==""||$n4==""||$n5==""){echo "Preencha todos os campos!" . "<br>";}
        else{ 
            $soma1 = $n1 * $n2;
            $soma2 = $soma1 + ($n3 * $n4 * $n5);
            $resultado = $soma1 + $soma2;
            echo "O Resultado da equação é " . $resultado;
            if($resultado > 100){echo " e o numero é ACIMA DE 100";}
            if($resultado < 100){echo " e o numero é ABAIXO DE 100";}
            if($resultado == 100){echo " e o numero é IGUAL A 100";}
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Logicos</title>
</head>
<body>
    <h5 style="text-align: center;">1) Crie um formulário no qual o usuário digite cinco valores no qual: devera ser feito a multiplicação dos 2 primeiros números e o resultado somar com a multiplicação dos 3 últimos números. O resultado deverá ser exibido e verificar:
        - Se o resultado for acima de 100, mostrar: ACIMA DE 100, caso contrário: ABAIXO DE 100. Se for igual a 100, mostrar IGUAL A 100</h5>
    <form action="ex1_operadores.php" method="post">
    <label>Digide um numero:</label>
    <input type="number" name="n1" value="<?= isset($n1)?$n1:""?>"><br>
    <label>Digide um numero:</label>
    <input type="number" name="n2" value="<?= isset($n2)?$n2:""?>"><br>
    <label>Digide um numero:</label>
    <input type="number" name="n3" value="<?= isset($n3)?$n3:""?>"><br>
    <label>Digide um numero:</label>
    <input type="number" name="n4" value="<?= isset($n4)?$n4:""?>"><br>
    <label>Digide um numero:</label>
    <input type="number" name="n5" value="<?= isset($n5)?$n5:""?>"><br>
    <button name="btn_calcular">- Calcular -</button>
    </form>
</body>
</html>