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