<?php
    class Boletim{
    
        public function CalcularMedia($n1, $n2, $n3, $n4)
        {
            $media = ($n1 + $n2 + $n3 + $n4) / 4;
            return $media;
        }
        public function VerClassificação($media)
        {
            $classificacao = "";

            if ($media >= 0 && $media <= 39) 
            {
                $classificacao = 'REPROVADO';
            } 
            else if ($media >= 40 && $media <= 59)
            {
                $classificacao = 'EXAME';
            } 
            else if ($media >= 60 && $media <= 100) 
            {
                $classificacao = 'APROVADO';
            }
            
            return $classificacao;
        }
    
    }