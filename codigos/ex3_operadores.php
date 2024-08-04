<!-- Atividade Imcompleta, falta colocar a imagem -->
<?php

    $feliz = '.imagens/feliz.png';
    $preocupado = '.imagens/preocupado.png';
    $sad = '.imagens/sad.png';

    $n1 = "";
    $n2 = "";
    $n3 = "";
    $n4 = "";

    if(isset($_POST["btn_calcular"])){
        $n1 = trim($_POST["n1"]);
        $n2 = trim($_POST["n2"]);
        $n3 = trim($_POST["n3"]);
        $n4 = trim($_POST["n4"]);

        if($n1 == "" || $n2 == "" || $n3 == "" || $n4 == "" ){echo "Preencha todos os campos vazios";}
        else{ 
            $media = ($n1 + $n2 + $n3 + $n4)/4;
            $classificação = "";

            if ($media <= 39){$classificação = "Reprovado";}
            else if($media >= 40 && $media <=59){ $classificação = "Exame"; }
            else if($media >= 60){ $classificação = "Aprovado";}   
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exame Verf.Notas</title>
</head>
<body>
    <h5>3) Faça uma pagina no qual o usuario digite suas 4 notas. Seja calculado a media aritimética e mostre a situação do aluno:
0 a 39 : REPROVADO (exibir em uma LABEL com a cor VERMELHA e com uma imagem do SMILLE TRISTE)
40 a 59: EXAME (exibir em uma LABEL com a cor LARANJA e com uma imagem do SMILLE PREOCUPADO)
60 para cima : APROVADO (exibir em uma LABEL com a cor AZUL e com uma imagem do SMILLE FELIZ)</h5>
<hr>
<p>Insira suas notas dos quatro bimestres para calcular a sua média anual:</p>

    <form action="ex3_operadores.php" method="post">
        <label>Nota 01: </label>
        <input type="string" name="n1" value="<?= isset($n1)?$n1:""?>"><br>
        <label>Nota 02: </label>
        <input type="number" name="n2" value="<?= isset($n2)?$n2:""?>"><br>
        <label>Nota 03: </label>
        <input type="number" name="n3" value="<?= isset($n3)?$n3:""?>"><br>
        <label>Nota 04: </label>
        <input type="number" name="n4" value="<?= isset($n4)?$n4:""?>"><br>
        <hr>
        <button name="btn_calcular">Calcular média</button><br>
        <hr>
        <label>Média: </label>
        <input disabled value="<?= isset($media)?$media:"" ?>"><br>
        <label>Resultado: </label>
        <input disabled value="<?= isset($classificação)?$classificação:""?>">
        <img src="" alt="">
    </form>
</body>
</html>