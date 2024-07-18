<?php


function calcularvalorcompra($qtd, $valor){
    // Se o valor for 0 ele exime mensagem para prfeencher todos os campos
    if($qtd == "" || $valor == "")  
        return 0;
    
    $resultado = $qtd * $valor;
        return $resultado; }