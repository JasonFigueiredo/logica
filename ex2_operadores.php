<?php

if(isset($_POST["button_enviar"])){

    $nota1 = trim($_POST["nota1"]);
    $nota2 = trim($_POST["nota2"]);
    $nota3 = trim($_POST["nota3"]);
    $nota4 = trim($_POST["nota4"]);

    if($nota1 == "" || $nota2 == "" || $nota3 == "" || $nota4 == ""){
        echo "Preencer todos os campos das notas";
    } else {
    
        $media= ($nota1 + $nota2 + $nota3 + $nota4) / 4;
        $classificação = "";    
    
        if ($media >= 0 && $media <= 39){echo "";
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
    <link rel="stylesheet" href="styleex2.css">
</head>
<body>
    <form>
        <input name="nota1" placeholder="Nota 1" value="">
        <input name="nota2" placeholder="Nota 2" value="">
        <input name="nota3" placeholder="Nota 3" value="">
        <input name="nota4" placeholder="Nota 4" value="">
        <button name="button_enviar">Média</button>
        <hr>
        <label>Média: </label>
        <input disabled value="<?= isset($media) ? $media : "" ?>">
        <label>Classificação: </label>
        <input class="<?= $css_cor?>" disabled value="<?= isset($class)?>"></label>

    </form>
    
</body>
</html>