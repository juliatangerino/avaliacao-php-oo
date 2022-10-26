<?php

require_once __DIR__.'/configuration/connect.php';

class View extends DataBaseService {

    public $data;
    public $idShow;

    public function visulizarCadastros() {
        
        if(isset($_GET['show'])) {
            $this->idShow = $_GET['show'];
        }

        $sql = "SELECT * FROM cadastro.cliente WHERE id_cliente = '{$this->idShow}'";
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
