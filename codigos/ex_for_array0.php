<?php
$qtd_elementos = 7;

if (isset($_POST['btn_exibir'])) {

    $n1 = trim($_POST['n1']);
    $n2 = trim($_POST['n2']);
    $n3 = trim($_POST['n3']);
    $n4 = trim($_POST['n4']);
    $n5 = trim($_POST['n5']);
    $n6 = trim($_POST['n6']);
    $n7 = trim($_POST['n7']);

    if (
        $n1 == '' || $n2 == '' || $n3 == '' || $n4 == '' || $n5 == '' || $n5 == ''
        || $n6 == '' ||  $n7 == ''
    )
        echo 'Preencher TODOS OS NUMEROS';
    else {
        //Cria a variável array
        $numeros = array();
        //Guarda os valores
        $numeros[] = $n1;
        $numeros[] = $n2;
        $numeros[] = $n3;
        $numeros[] = $n4;
        $numeros[] = $n5;
        $numeros[] = $n6;
        $numeros[] = $n7;

        for ($i = 0; $i < count($numeros); $i++) {
            echo 'Número: ' . $numeros[$i] . '. Sua posição é: [' . $i . ']<br>';
        }

        echo '----------------------------------------------------------<br>';
        echo '----- NUMEROS PARES ENCONTRADOS -----<br>';
        echo '-----------------------------------------------------------<br>';
        $flag = false;
        //LAÇO DE REPETIÇÃO ENCONTRANDO OS NUMEROS PARES
        for($i=0; $i < count($numeros); $i++)
        {
            if($numeros[$i] % 2 == 0){
                // Verifica se a nao for par usando o $flag
                $flag = true;
                echo 'Número: ' . $numeros[$i] . '. Sua posição é: [' . $i . ']<br>';
            }
        }
            // caso contrario da sua equação, ele identifica e exibe o ECHO que voce decidir, texto ou variavel
            if(!$flag)
            {
                echo "Não foi encontrado um numero Par";
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
    <form action="ex_for_array0.php" method="post">
        <?php for ($i = 1; $i <= $qtd_elementos; $i++) { ?>
        <label>Numero <?= $i ?></label>
        <input name="n<?= $i ?>">
        <br>
        <?php } ?>
        <button name="btn_exibir">Exibir</button>
    </form>
</body>

</html>