<?php

require_once __DIR__.'/configuration/connect.php';

class Create extends DataBaseService {
    
    private function validar_idade($idade) {
        if ($idade < 0) {
            echo("A idade precisa ser um valor positivo");
            return false;
        }
        return true;
    }

    public function adicionarCliente( $nome, $endereco, $idade, $cpf, $sexo) {
        if($this->validar_idade($idade)) {
            $sql = "INSERT INTO cliente ( `nome`, `endereco`, `idade`, `cpf`, `sexo`) ";
            $sql = $sql."VALUES ('".$nome."', '".$endereco."', ".$idade.", '".$cpf ."', '".$sexo."')";

            if (mysqli_query($this->conn, $sql)) {
                header('Location: ../../index.php');
                return;
            } else {
                echo ("Error: " . $sql . "<br>" . mysqli_error($this->conn));
            }
        }
    }
}

if(!empty($_POST)) {
    $nome = $_POST['nome'];
    $endereco = $_POST['endereco'];
    $cpf = $_POST['cpf'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo']; 

    $realizarCadastro = new Create();
    $realizarCadastro->adicionarCliente($nome, $endereco, $idade, $cpf, $sexo);
}