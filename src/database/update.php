<?php

require_once __DIR__ . '/configuration/connect.php';

class Update extends DataBaseService
{

    public $data;
    public $idShow;

    public function editarCadastros()
    {
        if (!empty($_POST)) {

            $id = $_POST['id_cliente'];
            $nome = $_POST['nome'];
            $endereco = $_POST['endereco'];
            $cpf = $_POST['cpf'];
            $idade = $_POST['idade'];
            $sexo = $_POST['sexo'];

            $sql = "UPDATE cadastro.cliente SET nome = '$nome', endereco = '$endereco', idade = '$idade', cpf = '$cpf', 
        sexo = '$sexo' WHERE id_cliente = '$id'";

            mysqli_query($this->conn, $sql);

            header('Location: ../../index.php');
            return;
        }
    }

    public function getData()
    {
        if (isset($_GET['edit'])) {
            $this->idShow = $_GET['edit'];

            $data = "SELECT * FROM cadastro.cliente WHERE id_cliente = '{$this->idShow}'";
            $this->data = mysqli_query($this->conn, $data);

            return $this->data;
        }
    }
}

$editar = new Update();
$data = $editar->getData();
$editar->editarCadastros();
