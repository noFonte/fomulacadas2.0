<?php
session_start();
require_once("twigInicializacao.php");
require_once("../system/repository/PessoaRepository/PessoaRepository.php");
$pessoaModel = new PessoaRepository(new MysqlAdapter());
$parametro = (isset($_GET["parametros"])) ? $_GET["parametros"]:"";
$msgbox =null;
if(isset($_SESSION["msgbox"])){
    $msgbox=$_SESSION["msgbox"];
    unset($_SESSION["msgbox"]);
}

echo $twig->render('listagens/pessoa/index.html', ['gradeDePessoas' =>$pessoaModel->all($parametro),'msgbox' => $msgbox]);
