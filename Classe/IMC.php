<?php

class Imc
{

    public function calcularImc($peso, $altura)
    {
        $imc = $peso / ($altura * $altura);
        return $imc;
    }
    public function classificacaoPeso($imc)
    {
        $classificação = "";

        if ($imc >= 0 && $imc <= 18.4) {
            $classificação = 'Abaixo do Peso';
        } else if ($imc >= 18.5 && $imc <= 24.9) {
            $classificação = 'PESO NORMAL';
        } else if ($imc >= 25 && $imc <= 40) {
            $classificação = 'Acima do Peso';
        }
        return $classificação;
    }
}
