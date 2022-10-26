<?php

require_once __DIR__.'/configuration/connect.php';

class Delete extends DataBaseService {

    public $data;
    public $idDelete;

    public function deletarCadastro() {

        if(isset($_GET['delete'])) {
            $this->idDelete = $_GET['delete'];
        }

        $sql = "DELETE FROM cadastro.cliente WHERE id_cliente='{$this->idDelete}'";
        $this->data = mysqli_query($this->conn, $sql);

        header("location: ../../index.php");
        return $this->data;
    }
}

$cadastros = new Delete();
$cadastros->deletarCadastro();
