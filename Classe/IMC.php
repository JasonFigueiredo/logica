<?php

    class IMC{
        
        public function CalcularIMC($peso, $altura){
         $imc = $peso / ($altura * $altura)
         return $imc;
        } 
        public function ClassificaçãoPeso($imc){
            $classificação = "";

            if ($imc >= 0 && $imc <= 18,4){
                $classificação = "ABAIXO DO PESO";
            }
            else if ($imc >= 18,5 && $imc <= 24,9)
            {
                $classificacao = 'PESO NORMAL';
            } 
            else if ($imc >= 25 && $imc <= 40) 
            {
                $classificacao = 'ACIMA DO PESO';
            }
            return $classificacao;
        }
    }