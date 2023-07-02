<?php


require_once("twigInicializacao.php");
require_once("./../system/repository/listar.php");

echo $twig->render('listagens/pessoa/index.html', ['gradeDePessoas' => $gradeDePessoas]);
