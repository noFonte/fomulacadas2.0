<?php
require_once(__DIR__."/../MysqlAdapter.php");
class PessoaRepository
{
    private $dbContext = null;
    public function __construct(IConexcao $adapterContext)
    {
        $this->dbContext = $adapterContext;
    }

    
    public function ByCpf($cpf)
    {
        $pessoa=null;
        $sql="select * from pessoas where cpf='".$cpf."'";
        $this->dbContext->open();
        $conn = $this->dbContext->instance();
        $retorno =  mysqli_query($conn,$sql);
        if (mysqli_num_rows($retorno) > 0) {
            $row = $retorno->fetch_assoc();
            $pessoa= $row;
            }
        $this->dbContext->close();
        return $pessoa;
    }


    public function store(PessoaTabelaDto $pessoaDto)
    {
        $sql = "INSERT INTO pessoas (cpf,idade,nome)
        VALUES ('".$pessoaDto->cpf."',".$pessoaDto->idade.", '".$pessoaDto->nome."')";
        $this->dbContext->open();
        $conn = $this->dbContext->instance();
        if ($conn->query($sql) === TRUE) {
            return 1;
        }
        $this->dbContext->close();
        return 0;
    }

    




    public function all($parametros="")
    {

        $gradeDePessoas=[];
        $parametros = (strlen(trim($parametros))) ? $parametros : "";
        $sql = "select * from pessoas where id like '%" . $parametros . "%'  or nome like '%" . $parametros . "%' 
        or idade like '%" . $parametros . "%' or cpf like '%" . $parametros . "%' ";
        $this->dbContext->open();
        $conn = $this->dbContext->instance();
        $retorno =  mysqli_query($conn,$sql);
        if (mysqli_num_rows($retorno) > 0) {
            while ($row = $retorno->fetch_assoc()) {
                $gradeDePessoas[] = $row;
            }
        }
        $this->dbContext->close();
        return $gradeDePessoas;
    }
}
