<?php
$gradeDePessoas=array();
require_once("PessoaRepository/PessoaRepository.php");
$pessoaModel = new PessoaRepository(new MysqlAdapter());
$parametro = (isset($_GET["parametros"])) ? $_GET["parametros"]:"";
$gradeDePessoas = $pessoaModel->all($parametro);
?>