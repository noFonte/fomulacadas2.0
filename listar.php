<?php





$gradeDePessoas=array();
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


$parametros =(isset($_GET["parametros"])) ? $_GET["parametros"]:"";



$sql="select * from pessoas where id like '%".$parametros."%'  or nome like '%".$parametros."%' 
     or idade like '%".$parametros."%' or cpf like '%".$parametros."%' ";
$retorno =  mysqli_query($conn,$sql);
if(mysqli_num_rows($retorno) > 0) {
    while( $row = $retorno->fetch_assoc()){
        $gradeDePessoas[]=$row;
    }
   
}




?>