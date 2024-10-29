<?php

class Combustivel{
    public function CalcularTotalLitros($etanol, $gasolina, $s500, $s10, $podium)
    {
        $soma = $etanol + $gasolina + $s500 + $s10 + $podium;
        return $soma;
    }
    public function CalcularAlcool($etanol,$litros){
        $etanol = $litros * 3.09;
        return $etanol;
    }
    public function CalcularGasolina($gasolina,$litros){
        $gasolina = $litros * 4.10;
        return $gasolina;
    }
    public function CalcularS500($s500,$litros){
        $s500 = $litros * 5.05;
        return $s500;
    }
    public function CalcularS10($s10,$litros){
        $s10 = $litros * 5.50;
        return $s10;
    }
    public function CalcularPodium($podium,$litros){
        $podium = $litros * 8.07;
        return $podium;
    }
}
