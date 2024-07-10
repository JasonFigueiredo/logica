<?php
    
    if(isset($_POST["btn_iniciar"])){
    $numero = array();
         
        $numero[]= $_POST["n1"];
        $numero[]= $_POST["n2"];
        $numero[]= $_POST["n3"];
        $numero[]= $_POST["n4"];
        $numero[]= $_POST["n5"];
        $numero[]= $_POST["n6"];
        $numero[]= $_POST["n7"];

        echo "TOTAL DE DIGITOS: " . count($numero) . "<br>";

     for ($i=0; $i < count($numero); $i++){

                echo "O numero Digitado foi: " . $numero[$i] . "<br>";
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
    <h1>
        Digite 07 Numeros !
    </h1>
    <form action="ex_for_array0.php" method="post">
        <label>Digite um Numero: </label>
        <input type="number" name="n1" value="<?isset($n1)?>"><br>
        <label>Digite um Numero: </label>
        <input type="number" name="n2" value="<?isset($n2)?>"><br>
        <label>Digite um Numero: </label>
        <input type="number" name="n3" value="<?isset($n3)?>"><br>
        <label>Digite um Numero: </label>
        <input type="number" name="n4" value="<?isset($n4)?>"><br>
        <label>Digite um Numero: </label>
        <input type="number" name="n5" value="<?isset($n5)?>"><br>
        <label>Digite um Numero: </label>
        <input type="number" name="n6" value="<?isset($n6)?>"><br>
        <label>Digite um Numero: </label>
        <input type="number" name="n7" value="<?isset($n7)?>"><br>
        <br>
        <button name="btn_iniciar"> - Iniciar Contagem - </button>
    </form>
</body>
</html>
