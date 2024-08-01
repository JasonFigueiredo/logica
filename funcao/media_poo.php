<?php
require_once 'funcao/fnc_geral.php';
require_once 'Classe/Boletim.php';

$resultado = false;

if (isset($_POST['btn_calculo'])) {

    $nota1 = trim($_POST['nota1']);
    $nota2 = trim($_POST['nota2']);
    $nota3 = trim($_POST['nota3']);
    $nota4 = trim($_POST['nota4']);

    if (!validarValor($nota1) || !validarValor($nota2) || !validarValor($nota3) || !validarValor($nota4)) {
        echo 'Preencher corretamente os numeros';
    }
    else {
        $objBoletim = new Boletim();
        $media = $objBoletim -> CalcularMedia($n1, $n2, $n3, $n4);
        $classificacao = $objBoletim ->VerClassificação($media);
    }
}
?>
