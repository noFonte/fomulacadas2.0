<?php


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
$sql="select * from pessoas";
$retorno =  mysqli_query($conn,$sql);
if(mysqli_num_rows($retorno) > 0) {
    while( $row = $retorno->fetch_assoc()){
        print_r($row);
    }
   
}




?>