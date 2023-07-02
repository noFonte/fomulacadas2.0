<?php

ini_set('display_errors',1);
ini_set('display_startup_erros',1);
error_reporting(E_ALL);

require_once './../vendor/autoload.php';
require_once './../system/libs/Helpers.php';


$loader = new \Twig\Loader\FilesystemLoader('../view');
$twig = new \Twig\Environment($loader, []);
$twig->addGlobal('session', $_SESSION);

$lexer = new \Twig\Lexer($twig,array(helpers($twig)));

$twig->setLexer($lexer);
function helpers($twig){
    array(
        $twig->addFunction(new \Twig\TwigFunction('formatarRcp',function($ra,$tamanho=5,$padrao='0'){
            return Helpers::formatarRcp($ra , $tamanho, $padrao, STR_PAD_LEFT);
        })),
        $twig->addFunction(new \Twig\TwigFunction('formatarCpf',function($cpf,$tipo=0){
            return Helpers::formatarCpf($cpf,$tipo);
        })),
        $twig->addFunction(new \Twig\TwigFunction('soNumeros',function( $numero){
            return  Helpers::soNumeros($numero);
        })),
    );
}
