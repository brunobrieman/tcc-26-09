<?php

class Connection {
    //atributos
    public $connection;
    public function __construct() {
        $this->connection = new PDO("mysql:host=localhost;dbname=newprojeto;", "aluno","aluno");
    }
    public function getConnection(){
        return $this->connection;
    }
}

//$conexao = new Connection();
//$conexao->getConnection();
