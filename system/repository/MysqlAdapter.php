<?php
require_once("IConexcao.php");
class MysqlAdapter implements IConexcao{
  private  $servername = "localhost";
  private  $username = "dev";
  private  $password = "@Dev1234";
  private  $dbname = "aula";
  private  $conn =null;


  public function open(){
    $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);
    if ($this->conn->connect_error) {
        throw new Exception ($this->conn->connect_error);
    }
  }


  public function instance(){
    return $this->conn;
  }


  public function close(){
     if(!is_null($this->conn)){
        $this->conn->close();
     }
  }






}