<?php


class Helpers{
    private function __clone(){}
    private function __construct(){}
        
    static function  formatarRcp($ra,$tamanho=5,$padrao='0'){
        return str_pad($ra , $tamanho, $padrao, STR_PAD_LEFT);
    }

    static function formatarCpf($cpf,$tipo=0){
        $cpfFormatado = preg_replace('/[^0-9]/', '', $cpf);
        $formato="-";
        if($tipo==1) { $formato=".";}
        return sprintf("%s.%s.%s%s%s",substr($cpfFormatado ,0,3),substr($cpfFormatado,3,3),substr($cpfFormatado,6,3),$formato,substr($cpfFormatado,9,2));

    }


    static function soNumeros($numeros){
        return preg_replace('/[^0-9]/', '', $numeros);

    }

    
    static function validaCPF($cpf) {
    $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
    if (strlen($cpf) != 11) {
        return false;
    }
    if (preg_match('/(\d)\1{10}/', $cpf)) {
        return false;
    }
    for ($t = 9; $t < 11; $t++) {
        for ($d = 0, $c = 0; $c < $t; $c++) {
            $d += $cpf[$c] * (($t + 1) - $c);
        }
        $d = ((10 * $d) % 11) % 10;
        if ($cpf[$c] != $d) {
            return false;
        }
    }
    return true;
  }





    
}
