<!-- Atividade Finalizada -->
<?php

    $n1 = "";
    $n2 = "";

    if(isset($_POST["btn_verificar"])){
        $n1 = $_POST["n1"];
        $n2 = $_POST["n2"];
// Verificar se os meu campos estão preenchidos e se são iguais ou diferentes.
        if ($n1 == ""){ echo "Preencha o 1º campo vazio" . "</br>"; }
        else if ($n2 == "") {echo "Preencha o 2º campo vazio"; }

        if ($n1 > $n2){ echo "O Numero 1 é maior que o 2"; }
        else if ($n2 > $n1){ echo "O Numero 2 é maior que o 1"; }
        else if ($n1 == $n2){ echo "O Numero 1 é igual ao numero 2"; }
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
    <h1>Verificar numeros</h1>
    <form action="operadores.php" method="post">
        <label>Numero 1</label>
        <input name="n1" type="number" value="<?= $n1?>"><br>
        <label>Numero 2</label>
        <input name="n2" type="number" value="<?= $n2?>"><br>
        <button name="btn_verificar">Verificar o maior numero</button>
    </form>
</body>
</html>