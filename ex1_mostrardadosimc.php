<?php
if(isset($_GET["nome"]) && $_GET["nome"] != "" &&
if(isset($_GET["peso"]) && $_GET["peso"] != "" &&
if(isset($_GET["altura"]) && $_GET["altura"] != "" 
)
{
 $nome= $_GET["nome"];
 $peso= $_GET["peso"];
 $altura= $_GET["altura"];

    $imc= $peso / ($altura * $altura);

    if($imc >=0 && $imc= <=20){

    }else if($imc >= 21 && $imc <= 25);{

    }else if($imc >= 21 && $imc <= 25);{
    
    }




}
else{
    header("location: ex1_pegardadosimc.php");
    exit;
}





?>