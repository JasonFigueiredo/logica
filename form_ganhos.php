<?php

if (isset($_POST["btn_somar"])){

    //Soma dos lucros mensal
$win_jan = $_POST["winjan"];
$lose_jan = $_POST["losejan"];
$lucro_jan = $win_jan - $lose_jan;
$win_fev = $_POST['winfev'];
$lose_fev = $_POST['losefev'];
$lucro_fev = $win_fev - $lose_fev;
$win_mar = $_POST['winmar'];
$lose_mar = $_POST['losemar'];
$lucro_mar = $win_mar - $lose_mar;
$win_abr = $_POST['winabr'];
$lose_abr = $_POST['loseabr'];
$lucro_abr = $win_abr - $lose_abr;
$win_mai = $_POST['winmai'];
$lose_mai = $_POST['losemai'];
$lucro_mai = $win_mai - $lose_mai;
$win_jun = $_POST['winjun'];
$lose_jun = $_POST['losejun'];
$lucro_jun = $win_jun - $lose_jun;
$win_jul = $_POST['winjul'];
$lose_jul = $_POST['losejul'];
$lucro_jul = $win_jul - $lose_jul;
$win_ago = $_POST['winago'];
$lose_ago = $_POST['loseago'];
$lucro_ago = $win_ago - $lose_ago;
$win_set = $_POST['winset'];
$lose_set = $_POST['loseset'];
$lucro_set = $win_set - $lose_set;
$win_out = $_POST['winout'];
$lose_out = $_POST['loseout'];
$lucro_out = $win_out - $lose_out;
$win_nov = $_POST['winnov'];
$lose_nov = $_POST['losenov'];
$lucro_nov = $win_nov - $lose_nov;
$win_dez = $_POST['windez'];
$lose_dez = $_POST['losedez'];
$lucro_dez = $win_dez - $lose_dez;

}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ganhos por mês</title>
    <link rel="stylesheet" href="form_ganhos.css">
</head>

<body>
    <fieldset class='q1'>
        <Legend>
            <h3>Ganhos Mensais</h3>
        </Legend>
        <form action="form_ganhos.php" method="post">

            <label>- Ganhos mês de Janeiro: </label>
            <input placeholder="Seu Ganho Mensal" name="winjan" value="<?= $win_jan?>" type="number">
            <label>- Percas mês de Janeiro: </label>
            <input placeholder="Sua Perca Mensal" name="losejan" value="<?= $lose_jan?>" type="number">
            <label>- Lucro mês de Janeiro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_jan" value="<?= $lucro_jan?>">
            <hr>

            <label>- Ganhos mês de Fevereiro: </label>
            <input placeholder="Seu Ganho Mensal" name="winfev" value="<?= $win_fev?>" type="number">
            <label>- Percas mês de Fevereiro: </label>
            <input placeholder="Sua Perca Mensal" name="losefev" value="<?= $lose_fev?>" type="number">
            <label>- Lucro mês de Fevereiro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_fev" value="<?= $lucro_fev?>">
            <hr>

            <label>- Ganhos mês de Março: </label>
            <input placeholder="Seu Ganho Mensal" name="winmar" value="<?= $win_mar?>" type="number">
            <label>- Percas mês de Março: </label>
            <input placeholder="Sua Perca Mensal" name="losemar" value="<?= $lose_mar?>" type="number">
            <label>- Lucro mês de Março: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_mar" value="<?= $lucro_mar?>">
            <hr>

            <label>- Ganhos mês de Abril: </label>
            <input placeholder="Seu Ganho Mensal" name="winabr" value="<?= $win_abr?>" type="number">
            <label>- Percas mês de Abril: </label>
            <input placeholder="Sua Perca Mensal" name="loseabr" value="<?= $lose_abr?>" type="number">
            <label>- Lucro mês de Abril: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_abr" value="<?= $lucro_abr?>">
            <hr>

            <label>- Ganhos mês de Maio: </label>
            <input placeholder="Seu Ganho Mensal" name="winmai" value="<?= $win_mai?>" type="number">
            <label>- Percas mês de Maio: </label>
            <input placeholder="Sua Perca Mensal" name="losemai" value="<?= $lose_mai?>" type="number">
            <label>- Lucro mês de Maio: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_mai" value="<?= $lucro_mai?>">
            <hr>

            <label>- Ganhos mês de Junho: </label>
            <input placeholder="Seu Ganho Mensal" name="winjun" value="<?= $win_jun?>" type="number">
            <label>- Percas mês de Junho: </label>
            <input placeholder="Sua Perca Mensal" name="losejun" value="<?= $lose_jun?>" type="number">
            <label>- Lucro mês de Junho: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_jun" value="<?= $lucro_jun?>">
            <hr>

            <label>- Ganhos mês de Julho: </label>
            <input placeholder="Seu Ganho Mensal" name="winjul" value="<?= $win_jul?>" type="number">
            <label>- Percas mês de Julho: </label>
            <input placeholder="Sua Perca Mensal" name="losejul" value="<?= $lose_jul?>" type="number">
            <label>- Lucro mês de Julho: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_jul" value="<?= $lucro_jul?>">
            <hr>

            <label>- Ganhos mês de Agosto: </label>
            <input placeholder="Seu Ganho Mensal" name="winago" value="<?= $win_ago?>" type="number">
            <label>- Percas mês de Agosto: </label>
            <input placeholder="Sua Perca Mensal" name="loseago" value="<?= $lose_ago?>" type="number">
            <label>- Lucro mês de Agosto: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_ago" value="<?= $lucro_ago?>">
            <hr>

            <label>- Ganhos mês de Setembro: </label>
            <input type="number" placeholder="Seu ganho Mensal" name="winset" value="<?= $win_set?>">
            <label>- Percas mês de Setembro: </label>
            <input type="number" placeholder="Sua Perca Mensal" name="loseset" value="<?= $lose_set?>">
            <label>- Lucro mês de Setembro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_set" value="<?= $lucro_set?>">
            <hr>

            <label>- Ganhos mês de Outubro: </label>
            <input type="number" placeholder="Seu ganho mensal" name="winout" value="<?= $win_out?>">
            <label>- Percas mês de Outubro: </label>
            <input type="number" placeholder="Sua Perca Mensal" name="loseout" value="<?= $lose_out?>">
            <label>- Lucro mês de Outubro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_out" value="<?= $lucro_out?>">
            <hr>

            <label>- Ganhos mês de Novembro: </label>
            <input type="number" placeholder="Seu Ganho mensal" name='winnov' value="<?= $win_nov?>">
            <label>- Percas mês de Novembro: </label>
            <input type="number" placeholder="Sua Perca Mensal" name='losenov' value="<?= $lose_nov?>">
            <label>- Lucro mês de Novembro: </label>
            <input disabled value="Seu Lucro Mensal" name='lucro_nov' value="<?= $lucro_nov?>">
            <hr>

            <label>- Ganhos mês de Dezembro: </label>
            <input type="number" placeholder='Seu ganho mensal' name='windez' value="<?= $win_dez?>">
            <label>- Percas mês de Dezembro: </label>
            <input type="number" placeholder='Sua Perca Mensal' name='losedez' value="<?= $lose_dez?>">
            <label>- Lucro mês de Dezembro: </label>
            <input disabled value='Seu Lucro Mensal' name='lucro_dez' value="<?= $lucro_dez?>">
            <hr>

            <label">Calcular geral</label>
            <button name="btn_somar">Calcular</button>

        </form>
    </fieldset>
</body>

</html>