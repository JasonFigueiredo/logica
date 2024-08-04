<!-- Atividade finalizada -->
<?php
$votoposi = 'imagens/voto-positivo.png';
$votoneg = 'imagens/voto-negativo.png';

 $n1="";
 $n2="";
 $n3="";

 if(isset($_POST["btn_calcular"])){
    $n1 = trim($_POST["n1"]);
    $n2 = trim($_POST["n2"]);
    $n3 = trim($_POST["n3"]);
    
    if($n1==""||$n2==""||$n3==""){echo "Preencha todos os campos!";}

    else{
        $meioDivididoPor2 = $n2 / 2;

        if($meioDivididoPor2>=$n1 && $meioDivididoPor2<=$n3){echo "O numero $meioDivididoPor2 está entre o $n1 e $n3" . '<img src="' . $votoposi . '">';}
        else {echo "O numero $meioDivididoPor2 Não está entre o $n1 e $n3" . '<img src="' . $votoneg . '">';}
    }
}   
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Operadores 02</title>
    </head>
    <body style="text-align: center;">
        <h5>2) Crie uma página no qual o usuário digite 3 valores. Logo após o botão Verificar, é necessário calcular o valor do MEIO DIVIDIDO por 2 e o resultado verificar se está entre o primeiro e o último número. Caso esteja, mostrar: o numero X está entre o número INICIAL e FINAL. Caso contrário: o numero X NÃO está entre o número INICIAL e FINAL. 
            Notas: Se estiver entre o intervalo, mostrar a imagem POSITIVA(JOIA), caso contrário NEGATIVA</h5>
            
            <form action="ex2_operadores.php" method="post">
                <label>Digine o 1º numero: </label>
                <input name="n1" placeholder="Digite o numero" value="<?= isset($n1)?$n1:""?>"><br>
                <label>Digine o 2º numero: </label>
                <input name="n2"placeholder="Digite o numero" value="<?= isset($n2)?$n2:""?>"><br>
                <label>Digine o 3º numero: </label>
                <input name="n3" placeholder="Digite o numero" value="<?= isset($n3)?$n3:""?>"><br>
                <hr>
                <button name="btn_calcular">Calcular</button>
    </form>
</body>
</html>
