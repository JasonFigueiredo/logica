<?php

    $n1 = "";
    $n2 = "";

    if(isset($_post[btn_verificar])){
    
    $n1 = $_POST["m1"]
    $n2 = $_POST["m2"]

        
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
    <form action="operadores.php" method="post">
    <input name="n1" value="<?= $n1?>">
    <input name="n2" value="<?= $n2?>">


    </form>
</body>
</html>