<?php

function formatarRa($ra,$tamanho=5,$padrao='0'){
    return str_pad($ra , $tamanho, $padrao, STR_PAD_LEFT);
}

function formatarCpf($cpf,$tipo=0){
    $tresDigitoUm=substr($cpf,0,3);
    $tresDigitoDois=substr($cpf,3,3);
    $tresDigitoTres=substr($cpf,6,3);
    $digitoVerificador=substr($cpf,9,2);
    $formato="-";
    if($tipo==1) { $formato=".";}
    return sprintf("%s.%s.%s%s%s",$tresDigitoUm,$tresDigitoDois,$tresDigitoTres,$formato,$digitoVerificador);
}


function soNumeros($numeros){
    return preg_replace('/[^0-9]/', '', $numeros);

}





?>