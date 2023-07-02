<?php
require_once './../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../view');
$twig = new \Twig\Environment($loader, []);




echo $twig->render('index.html', ['name' => 'Fabien','numeros' => [1,2,58,7,4]]);
