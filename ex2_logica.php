<?php
$num1 = '';
$num2 = '';
$num3 = '';
$num4 = '';
$num5 = '';
$num6 = '';
$num7 = '';
$num8 = '';
$num9 = '';
$soma = '';

if(isset($_POST["btn_somar"]))
{
    $num1 = $_POST['n1'];
    $num2 = $_POST['n2'];
    $num3 = $_POST['n3'];
    $num4 = $_POST['n4'];
    $num5 = $_POST['n5'];
    $num6 = $_POST['n6'];
    $num7 = $_POST['n7'];
    $num8 = $_POST['n8'];
    $num9 = $_POST['n9'];
    
    $soma = (($num1 + $num9) * $num2 ) + ($num3 * $num4 * $num5 * $num6 * $num7 * $num8);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>9 digitos "oloko"</title>
</head>
    <body>
        <form action="ex2_logica.php" method="post">
            <label>Numero 01:</label>
            <input placeholder="Numero 1" name="n1" value="<?= $num1 ?>"><br>
            <label>Numero 02:</label>
            <input placeholder="Numero 2" name="n2" value="<?= $num2 ?>"><br>
            <label>Numero 03:</label>
            <input placeholder="Numero 3" name="n3" value="<?= $num3 ?>"><br>
            <label>Numero 04:</label>
            <input placeholder="Numero 4" name="n4" value="<?= $num4 ?>"><br>
            <label>Numero 05:</label>
            <input placeholder="Numero 5" name="n5" value="<?= $num5 ?>"><br>
            <label>Numero 06:</label>
            <input placeholder="Numero 6" name="n6" value="<?= $num6 ?>"><br>
            <label>Numero 07:</label>
            <input placeholder="Numero 7" name="n7" value="<?= $num7 ?>"><br>
            <label>Numero 08:</label>
            <input placeholder="Numero 8" name="n8" value="<?= $num8 ?>"><br>
            <label>Numero 09:</label>
            <input placeholder="Numero 9" name="n9" value="<?= $num9 ?>"><br>
            <button name="btn_somar">Valor</button>
        <!-- desativa alteração do campo e traz mais segurança -->
            <input disabled value="<?= $soma ?>">
    </body>
</html>