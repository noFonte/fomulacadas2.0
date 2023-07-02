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
    <link rel="stylesheet" href="style.css">
   
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

                       <a href="index.html" class=" ">Cadastrar Nova Pessoa</a>
                      
                       
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