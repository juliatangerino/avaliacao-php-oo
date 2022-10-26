<?php

require_once __DIR__.'/configuration/connect.php';

class View extends DataBaseService {

    public $data;

    public function visulizarCadastros() {
        $sql = "SELECT * FROM cadastro.cliente;";
        $this->data = mysqli_query($this->conn, $sql);

        return $this->data;
    }

    public function getData() {
        return $this->data;
    }
}

$cadastros = new View();
$cadastros->visulizarCadastros();
$data = $cadastros->getData();
