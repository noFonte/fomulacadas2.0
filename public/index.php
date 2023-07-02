<?php
session_start();
require_once("twigInicializacao.php");

require_once("../system/repository/PessoaRepository/PessoaRepository.php");
require_once("../system/repository/PessoaRepository/PessoaTabelaDto.php");
$msgbox =null;
$pessoaModel = new PessoaRepository(new MysqlAdapter());
if(isset( $_POST["cpf"]) && isset( $_POST["nome"]) && isset( $_POST["idade"])){
    $pessoaDto =new PessoaTabelaDto();
    $pessoaDto->cpf = Helpers::soNumeros($_POST["cpf"]);
    $pessoaDto->nome = $_POST["nome"];
    $pessoaDto->idade = $_POST["idade"];
    $pessoa =$pessoaModel->ByCpf($pessoaDto->cpf);
    if(!Helpers::validaCPF($pessoaDto->cpf)){
        $_SESSION["msgbox"]="CPF Informado é Invalido..!";
        header("location:index.php");
        die;
    }
    if(!is_null($pessoa)){
        $_SESSION["msgbox"]="CPF já Cadastrado..!";
        header("location:listadepessoas.php");
        die;
    }
    if($pessoaModel->store($pessoaDto)){
        $_SESSION["msgbox"]="Registro  Criado com Sucesso..!";
        header("location:listadepessoas.php");
        die;
    }
}

if(isset($_SESSION["msgbox"])){
    $msgbox=$_SESSION["msgbox"];
    unset($_SESSION["msgbox"]);
}
echo $twig->render('cadastro/pessoa/index.html', ['msgbox' => $msgbox]);
