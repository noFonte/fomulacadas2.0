<?php


function validaCPF($cpf) {
  // Extrai somente os números
  $cpf = preg_replace( '/[^0-9]/is', '', $cpf );
  // Verifica se foi informado todos os digitos corretamente
  if (strlen($cpf) != 11) {
      return false;
  }
 // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
  if (preg_match('/(\d)\1{10}/', $cpf)) {
      return false;
  }
  // Faz o calculo para validar o CPF
  for ($t = 9; $t < 11; $t++) {
      for ($d = 0, $c = 0; $c < $t; $c++) {
          $d += $cpf[$c] * (($t + 1) - $c);
      }
      $d = ((10 * $d) % 11) % 10;
      if ($cpf[$c] != $d) {
          return false;
      }
  }
  return true;

}


if(isset( $_POST["cpf"]) && isset( $_POST["nome"]) && isset( $_POST["idade"])){

      $cpf = $_POST["cpf"];
      $nome = $_POST["nome"];
      $idade = $_POST["idade"];


      if(!validaCPF($cpf)) {
        echo "<h3>CPF Informado é Invalido..!</h3>";
        echo "<a href=\"index.html\">VOLTAR</a>";
        return;
      }



      $servername = "localhost";
      $username = "dev";
      $password = "@Dev1234";
      $dbname = "aula";

      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }


      $sql="select id from pessoas where cpf='".$cpf."'";
      $retorno =  mysqli_query($conn,$sql);
      if(mysqli_num_rows($retorno) > 0) {
        echo "<h3>CPF já Cadastrado..!</h3>";
        echo "<a href=\"index.html\">NOVO CADASTRO</a>";
        return;
      }




      $sql = "INSERT INTO pessoas (cpf,idade,nome)
      VALUES ('".$cpf."',".$idade.", '".$nome."')";

      if ($conn->query($sql) === TRUE) {
        echo "<h3>Registro  Criado com Sucesso..!</h3>";
        echo "<a href=\"index.html\">NOVO CADASTRO</a>";
        header("location:listadepessoas.php");
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

      $conn->close();






}
?>