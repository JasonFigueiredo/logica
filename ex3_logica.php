<?php
 $wjan = "";
 $wfev = "";
 $wmar = "";
 $wabr = "";
 $wmai = "";
 $wjun = "";
 $wjul = "";
 $wago = "";
 $wset = "";
 $wout = "";
 $wnov = "";
 $wdez = "";
 
 $ljan = "";
 $lfev = "";
 $lmar = "";
 $labr = "";
 $lmai = "";
 $ljun = "";
 $ljul = "";
 $lago = "";
 $lset = "";
 $lout = "";
 $lnov = "";
 $ldez = "";

 $lucrojan = "";
 $lucrofev = "";
 $lucromar = "";
 $lucroabr = "";
 $lucromai = "";
 $lucrojun = "";
 $lucrojul = "";
 $lucroago = "";
 $lucroset = "";
 $lucroout = "";
 $lucronov = "";
 $lucrodez = "";

 $ganhoano = ""; 
 $percaano = "";
 $lucroano = "";

 if(isset($_POST["btn_enviar"])){
    $wjan = $_POST["wjan"];
    $wfev = $_POST["wfev"];
    $wmar = $_POST["wmar"];
    $wabr = $_POST["wabr"];
    $wmai = $_POST["wmai"];
    $wjun = $_POST["wjun"];
    $wjul = $_POST["wjul"];
    $wago = $_POST["wago"];
    $wset = $_POST["wset"];
    $wout = $_POST["wout"];
    $wnov = $_POST["wnov"];
    $wdez = $_POST["wdez"];

    $ljan = $_POST["ljan"];
    $lfev = $_POST["lfev"];
    $lmar = $_POST["lmar"];
    $labr = $_POST["labr"];
    $lmai = $_POST["lmai"];
    $ljun = $_POST["ljun"];
    $ljul = $_POST["ljul"];
    $lago = $_POST["lago"];
    $lset = $_POST["lset"];
    $lout = $_POST["lout"];
    $lnov = $_POST["lnov"];
    $ldez = $_POST["ldez"];

   $lucrojan = ($wjan - $ljan);
   $lucrofev = ($wfev - $lfev);
   $lucromar = ($wmar - $lmar);
   $lucroabr = ($wabr - $labr);
   $lucromai = ($wmai - $lmai);
   $lucrojun = ($wjun - $ljun);
   $lucrojul = ($wjul - $ljul);
   $lucroago = ($wago - $lago);
   $lucroset = ($wset - $lset);
   $lucroout = ($wout - $lout);
   $lucronov = ($wnov - $lnov);
   $lucrodez = ($wdez - $ldez);

   $ganhoano = ( $wjan
   +$wfev+
   +$wmar+
   +$wabr+
   +$wmai+
   +$wjun+
   +$wjul+
   +$wago+
   +$wset+
   +$wout+
   +$wnov+
   +$wdez); 
   $percaano = ( $ljan 
   + $lfev +
   + $lmar +
   + $labr +
   + $lmai +
   + $ljun +
   + $ljul +
   + $lago +
   + $lset +
   + $lout +
   + $lnov +
   + $ldez);

   $lucroano = ( $lucrojan 
   + $lucrofev +
   + $lucromar +
   + $lucroabr +
   + $lucromai +
   + $lucrojun +
   + $lucrojul +
   + $lucroago +
   + $lucroset +
   + $lucroout +
   + $lucronov +
   + $lucrodez);
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
    <form action="ex3_logica.php" method="post">
        <label>Ganho mês de Janeiro: </label>
        <input type="number" name="wjan" value="<?= $wjan ?>">
        <Label>Perca:</Label>
        <input type="number" name="ljan" value="<?= $ljan ?>">
        <label>Lucro:</label>
        <input type="number" name="lucrojan" disabled value="<?= $lucrojan ?>"><br>

        <label>Ganho mês de Fevereiro: </label>
        <input type="number" name="wfev" value="<?= $wfev ?>">
        <Label>Perca:</Label>
        <input type="number" name="lfev" value="<?= $lfev ?>">
        <label>Lucro:</label>
        <input type="number" name="lucrofev" disabled value="<?= $lucrofev ?>"><br>

        <label>Ganho mês de Março: </label>
        <input type="number" name="wmar" value="<?= $wmar ?>">
        <Label>Perca:</Label>
        <input type="number" name="lmar" value="<?= $lmar ?>">
        <label>Lucro:</label>
        <input type="number" name="lucromar" disabled value="<?= $lucromar ?>"><br>

        <label>Ganho mês de Abril: </label>
        <input type="number" name="wabr" value="<?= $wabr ?>">
        <Label>Perca:</Label>
        <input type="number" name="labr" value="<?= $labr ?>">
        <label>Lucro:</label>
        <input type="number" name="lucroabr" disabled value="<?= $lucroabr ?>"><br>

        <label>Ganho mês de Maio: </label>
        <input type="number" name="wmai" value="<?= $wmai ?>">
        <Label>Perca:</Label>
        <input type="number" name="lmai" value="<?= $lmai ?>">
        <label>Lucro:</label>
        <input type="number" name="lucromai" disabled value="<?= $lucromai ?>"><br>

        <label>Ganho mês de junho: </label>
        <input type="number" name="wjun" value="<?= $wjun ?>">
        <Label>Perca:</Label>
        <input type="number" name="ljun" value="<?= $ljun ?>">
        <label>Lucro:</label>
        <input type="number" name="lucrojun" disabled value="<?= $lucrojun ?>"><br>

        <label>Ganho mês de julho: </label>
        <input type="number" name="wjul" value="<?= $wjul ?>">
        <Label>Perca:</Label>
        <input type="number" name="ljul" value="<?= $ljul ?>">
        <label>Lucro:</label>
        <input type="number" name="lucrojul" disabled value="<?= $lucrojul ?>"><br>

        <label>Ganho mês de Agosto: </label>
        <input type="number" name="wago" value="<?= $wago ?>">
        <Label>Perca:</Label>
        <input type="number" name="lago" value="<?= $lago ?>">
        <label>Lucro:</label>
        <input type="number" name="lucroago" disabled value="<?= $lucroago ?>"><br>

        <label>Ganho mês de Setembro: </label>
        <input type="number" name="wset" value="<?= $wset ?>">
        <Label>Perca:</Label>
        <input type="number" name="lset" value="<?= $lset ?>">
        <label>Lucro:</label>
        <input type="number" name="lucroset" disabled value="<?= $lucroset ?>"><br>

        <label>Ganho mês de Outubro: </label>
        <input type="number" name="wout" value="<?= $wout ?>">
        <Label>Perca:</Label>
        <input type="number" name="lout" value="<?= $lout ?>">
        <label>Lucro:</label>
        <input type="number" name="lucroout" disabled value="<?= $lucroout ?>"><br>

        <label>Ganho mês de Novembro: </label>
        <input type="number" name="wnov" value="<?= $wnov ?>">
        <Label>Perca:</Label>
        <input type="number" name="lnov" value="<?= $lnov ?>">
        <label>Lucro:</label>
        <input type="number" name="lucronov" disabled value="<?= $lucronov ?>"><br>

        <label>Ganho mês de Dezembro: </label>
        <input type="number" name="wdez" value="<?= $wdez ?>">
        <Label>Perca:</Label>
        <input type="number" name="ldez" value="<?= $ldez ?>">
        <label>Lucro:</label>
        <input type="number" name="lucrodez" disabled value="<?= $lucrodez ?>"><br>

        <button name="btn_enviar">Enviar Informações</button>
        <br>
        <br>
        <hr>
        <br>
        <label>total de ganho no Ano:</label>
        <input type="number" name="ganhoano" disabled value="<?= $ganhoano?>"><br>
        <label>total de perca no Ano:</label>
        <input type="number" name="percaano" disabled value="<?= $percaano?>"><br>
        <label>total de Lucro no Ano:</label>
        <input type="number" name="lucroano" disabled value="<?= $lucroano?>"><br>
    </form>
</body>

</html>