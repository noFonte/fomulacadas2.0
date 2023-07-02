<?php
require_once("twigInicializacao.php");
echo $twig->render('cadastro/pessoa/index.html', ['name' => 'Fabien','numeros' => [1,2,58,7,4]]);
