<?php
require_once './../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../view');
$twig = new \Twig\Environment($loader, []);
$lexer = new \Twig\Lexer($twig,array(helpers($twig)));
$twig->setLexer($lexer);


function helpers($twig){
    array(
        $twig->addFunction(new \Twig\TwigFunction('formatarRcp',function($ra,$tamanho=5,$padrao='0'){
            return str_pad($ra , $tamanho, $padrao, STR_PAD_LEFT);
        })),
        $twig->addFunction(new \Twig\TwigFunction('formatarCpf',function($cpf,$tipo=0){
            $cpfFormatado = preg_replace('/[^0-9]/', '', $cpf);
            $formato="-";
            if($tipo==1) { $formato=".";}
            return sprintf("%s.%s.%s%s%s",substr($cpfFormatado ,0,3),substr($cpfFormatado,3,3),substr($cpfFormatado,6,3),$formato,substr($cpfFormatado,9,2));
        })),
        $twig->addFunction(new \Twig\TwigFunction('soNumeros',function( $numeros){
            return preg_replace('/[^0-9]/', '', $numeros);
        })),
       


        

    );
}
