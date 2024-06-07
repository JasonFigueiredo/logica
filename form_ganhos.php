<?php

if(isset($_POST["btn_resultado"]))
{
$win_jan = $_POST["winjan"];
$win_fev = $_POST['winfev'];
$win_mar = $_POST['winmar'];
$win_abr = $_POST['winabr'];
$win_mai = $_POST['winmai'];
$win_jun = $_POST['winjun'];
$win_jul = $_POST['winjul'];
$win_ago = $_POST['winago'];
$win_set = $_POST['winset'];
$win_out = $_POST['winout'];
$win_nov = $_POST['winnov'];
$win_dez = $_POST['windez'];
$soma_win = ($win_jan + $win_fev + $win_mar + $win_abr + $win_mai + $win_jun + $win_jul + $win_ago + $win_set + $win_out + $win_nov + $win_dez);
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
            <label for="win_jan">- Ganhos mês de Janeiro: </label>
            <input placeholder="Seu Ganho Mensal" name="winjan" value="<?= $win_jan?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_fev">- Ganhos mês de Fevereiro: </label>
            <input placeholder="Seu Ganho Mensal" name="winfev" value="<?= $win_fev?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_mar">- Ganhos mês de Março: </label>
            <input placeholder="Seu Ganho Mensal" name="winmar" value="<?= $win_mar?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_abr">- Ganhos mês de Abril: </label>
            <input placeholder="Seu Ganho Mensal" name="winabr" value="<?= $win_abr?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_mai">- Ganhos mês de Maio: </label>
            <input placeholder="Seu Ganho Mensal" name="winmai" value="<?= $win_mai?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_jun">- Ganhos mês de Junho: </label>
            <input placeholder="Seu Ganho Mensal" name="winjun" value="<?= $win_jun?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_jul">- Ganhos mês de Julho: </label>
            <input placeholder="Seu Ganho Mensal" name="winjul" value="<?= $win_jul?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_ago">- Ganhos mês de Agosto: </label>
            <input placeholder="Seu Ganho Mensal" name="winago" value="<?= $win_ago?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_set">- Ganhos mês de Setembro: </label>
            <input type="number" placeholder="Seu ganho Mensal" name="winset" value="<?= $win_set?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_out">- Ganhos mês de Outubro: </label>
            <input type="number" placeholder="Seu ganho mensal" name="winout" value="<?= $win_out?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_nov">- Ganhos mês de Novembro: </label>
            <input type="number" placeholder="Seu Ganho mensal" name='winnov' value="<?= $win_nov?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="win_dez">- Ganhos mês de Dezembro: </label>
            <input type="number" placeholder='Seu ganho mensal' name='windez' value="<?= $win_dez?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="soma_win">Total de Ganho no Ano:</label>
            <input disabled value="<?= $soma_win ?>">
            <div class="btn">
                <button name="btn_resultado">- - - Enviar Para Calcular - - -</buttons>
            </div>
    </fieldset>

    <fieldset class='q2'>
        <Legend>
            <h3>Percas Mensais</h3>
        </Legend>
        <form action="form_ganhos.php" method="post">
            <label for="lose_jan">- Percas mês de Janeiro: </label>
            <input placeholder="Sua Perca Mensal" name="lose-jan" value="<?= $lose_jan?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_fev">- Percas mês de Fevereiro: </label>
            <input placeholder="Sua Perca Mensal" name="lose-fev" value="<?= $lose_fev?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_mar">- Percas mês de Março: </label>
            <input placeholder="Sua Perca Mensal" name="lose-mar" value="<?= $lose_mar?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_abr">- Percas mês de Abril: </label>
            <input placeholder="Sua Perca Mensal" name="lose-abr" value="<?= $lose_abr?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_mai">- Percas mês de Maio: </label>
            <input placeholder="Sua Perca Mensal" name="lose-mai" value="<?= $lose_mai?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_jun">- Percas mês de Junho: </label>
            <input placeholder="Sua Perca Mensal" name="lose-jun" value="<?= $lose_jun?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_jul">- Percas mês de Julho: </label>
            <input placeholder="Sua Perca Mensal" name="lose-jul" value="<?= $lose_jul?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_ago">- Percas mês de Agosto: </label>
            <input placeholder="Sua Perca Mensal" name="lose-ago" value="<?= $lose_ago?>" type="number">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_set">- Percas mês de Setembro: </label>
            <input type="number" placeholder="Sua Perca Mensal" name="lose-set" value="<?= $lose_set?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_out">- Percas mês de Outubro: </label>
            <input type="number" placeholder="Sua Perca Mensal" name="lose-out" value="<?= $lose_out?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_nov">- Percas mês de Novembro: </label>
            <input type="number" placeholder="Sua Perca Mensal" name='lose-nov' value="<?= $lose_nov?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lose_dez">- Percas mês de Dezembro: </label>
            <input type="number" placeholder='Sua Perca Mensal' name='lose-dez' value="<?= $lose_dez?>">
        <hr>
        <br><br><br>
        <form action="form_ganhos.php" method="post">
            <label for="soma_lose">Total de Perca no Ano:</label>
            <input disabled value="<?= $soma_lose?>">
    </fieldset>

    <fieldset class='q3'>
        <Legend>
            <h3>Lucros Mensais</h3>
        </Legend>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_jan">- Lucro mês de Janeiro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_jan" value="<?= $lucro_jan?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_fev">- Lucro mês de Fevereiro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_fev" value="<?= $lucro_fev?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_mar">- Lucro mês de Março: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_mar" value="<?= $lucro_mar?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_abr">- Lucro mês de Abril: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_abr" value="<?= $lucro_abr?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_mai">- Lucro mês de Maio: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_mai" value="<?= $lucro_mai?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_jun">- Lucro mês de Junho: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_jun" value="<?= $lucro_jun?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_jul">- Lucro mês de Julho: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_jul" value="<?= $lucro_jul?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_ago">- Lucro mês de Agosto: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_ago" value="<?= $lucro_ago?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_set">- Lucro mês de Setembro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_set" value="<?= $lucro_set?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_out">- Lucro mês de Outubro: </label>
            <input disabled value="Seu Lucro Mensal" name="lucro_out" value="<?= $lucro_out?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_nov">- Lucro mês de Novembro: </label>
            <input disabled value="Seu Lucro Mensal" name='lucro_nov' value="<?= $lucro_nov?>">
        <hr>
        <form action="form_ganhos.php" method="post">
            <label for="lucro_dez">- Lucro mês de Dezembro: </label>
            <input disabled value='Seu Lucro Mensal' name='lucro_dez' value="<?= $lucro_dez?>">
        <hr>
        <br><br><br>
        <form action="form_ganhos.php" method="post">
            <label for="soma_lucro">Total de Lucro no Ano:</label>
            <input disabled value="<?= $soma_lucro?>">
            <div class="btn">
                <button name="btn_resultado">- - - Enviar Para Calcular - - -</buttons>
            </div>
    </fieldset>
    <br>
    <hr>


</body>

</html>