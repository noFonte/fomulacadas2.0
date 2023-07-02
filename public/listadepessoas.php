<?php
require_once("twigInicializacao.php");
require_once("./../system/libs/libs.php");
require_once("./../system/repository/listar.php");




echo $twig->render('listagens/pessoa/index.html', ['name' => 'Fabien','numeros' => [1,2,58,7,4]]);
