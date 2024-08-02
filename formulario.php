<!-- Atividade Finalizada -->
<?php
    if(isset($_POST['btn_enviar'])){

        $nome = $_POST["nomecompleto"];
        $rua = $_POST["rua"];
        $bairro = $_POST["bairro"];
        $cep = $_POST["cep"];
        $num = $_POST["numero"];
        
        echo "Meu nome é: <br>" . $nome . "<br>" . "Moro na rua:<br>" . $rua . "<br>" . 
        "No Bairro:<br>" . $bairro . "<br>" . "No Cep:<br>" . $cep . "<br>" . "No numero:<br>" . $num; }
?>
<!DOCTYPE html>
<html lang="pt-br"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados Pesoais</title>
</head>
<body>
    <form action="formulario.php" method="post">
        <label>Nome Completo: </label>
        <input type="text" name="nomecompleto"><br>
        <label>Rua: </label>
        <input type="text" name="rua"><br>
        <label>Bairro: </label>
        <input type="text" name="bairro"><br>
        <label>CEP: </label>
        <input type="texnumbert" name="cep"><br>
        <label>Numero: </label>
        <input type="number" name="numero"><br>
        <button name="btn_enviar">Enviar</button>
    </form>
</body>
</html>