<?php

 require_once("libs.php");
 require_once("listar.php");


 


?>

<!DOCTYPE html>
<html lang="pt-br">
<meta http-equiv="Cache-control" content="public">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <link rel="stylesheet" href="style.css?v=1">
    <style>
        /*Listagens*/



        .tx-al-center {
            text-align: center !important;
        }

        .listagem {
            position: relative;
            padding: 1rem;
            width: 80%;
            margin: 0 auto;





        }



        .listagem>section {
            position: relative;
            color: red;
            height: auto;
            font-size: 2rem;
            margin-bottom: 3rem;
        }

        .listagem>section h1 {
            margin-bottom: 1rem;
        }

        .listagem>section hr {
            position: absolute;
            width: 100%;


        }

        .input-buscar {
            height: 2.4rem;
            width:100%;
            text-indent: 1rem;
            margin-bottom: 1rem;
            text-transform: uppercase;
        }


        .table-list {
            position: relative;
            background-color: aliceblue;
            width: 100%;
            margin-top: 1rem;
            box-sizing: border-box !important;
            overflow: hidden;

        }

        .table-list table {
            position: relative;
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #000;
            box-sizing: border-box !important;
        }

        .table-list table thead {
            background-color: black;
            height: 3rem;
            color: #fff;

            text-transform: uppercase;
        }


        .table-list table tbody tr td {
            height: 4rem;
            border-bottom: 1px solid #000;
            border: 1px solid #000;
            font-size: larger;
            box-sizing: border-box;
            transition: 5s;
        }

        .table-list table tbody tr:hover{
            background-color: #ffff80 !important;
        }

        .table-list table tbody tr:nth-child(even) {

            background-color: #f8efef;

        }


        .tb-btn {
            height: 3rem;
            margin: 10% 10%;
            width: 85%;
            box-sizing: border-box;
            border-radius: 4px 4px 4px 4px;
            -moz-border-radius: 4px 4px 4px 4px;
            -webkit-border-radius: 4px 4px 4px 4px;
            border: 0px solid #000000;
        }


        .alteracao {
            background-color:rgba(41, 72, 90,.4);
            color: #fdfdfd;
            transition: 2s;
        }

        .alerta{
            background-color: rgba(255, 0, 0,.4);
            color: #fdfdfd;
            transition: 2s;
        }

        .alteracao:hover {
            background-color: rgba(41, 72, 90,1);
            color: #fdfdfd;
        }

        .alerta:hover{
            background-color: rgba(255, 0, 0,1);
            color: #fdfdfd;
        }


        .tx-name{
            text-indent: 2rem;
        }


 
       


    </style>
</head>

<body>


    <div class="listagem">

        <section>
            <h1 class="title">Grade de Pessoas alcançadas.</h1>
            <hr>
        </section>

        <div class="main-list">

            <section>
                <form class="form-pesquisa" action="listagem.php" method="get">
                      
                       <input type="text" id="buscar" name="parametros" placeholder="O que Você Procura...? " class="input-buscar">

                       <a href="index.html" class=" ">Nova Pessoa Cadastrar</a>
                      
                       
                </form>
            </section>
            <div class="table-list">
                <table>

                    <thead>
                        <tr>
                            <th >
                                RCP
                            </th>
                            <th>Nome</th>
                            <th>Idade</th>
                            <th>CFP</th>
                            <th colspan="2">
                                Acões
                            </th>
                        </tr>
                    </thead>

                    <tbody>

                        <?php 
                        
                        foreach($gradeDePessoas as $key=>$pessoa){
                        
                        ?>
                        <tr>
                            <td class="tx-al-center"><?php  echo formatarRa($pessoa["id"]); ?></td>
                            <td class="tx-name"><?php  echo $pessoa["nome"]; ?></td>
                            <td class="tx-al-center"><?php  echo $pessoa["idade"]; ?></td>
                            <td class="tx-al-center"><?php  echo formatarCpf(soNumeros($pessoa["cpf"])); ?></td>
                            <td><button class="tb-btn  alteracao ">Alterar</button></td>
                            <td><button class="tb-btn alerta ">Excluir</button></td>
                        </tr>

                        <?php 
                        
                        }
                        ?>


 




                    </tbody>

                    <tfoot>

                    </tfoot>

                </table>


            </div>


        </div>





    </div>





</body>

</html>