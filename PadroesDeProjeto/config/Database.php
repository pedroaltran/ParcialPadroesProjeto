<?php

class Database {

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "padroesdeprojeto";


    public function conecta() {
        $conexao = new mysqli($this->host, $this->username, $this->password, $this->database);
        return $conexao;
    }

}

?>
