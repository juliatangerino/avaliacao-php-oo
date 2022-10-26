<?php
require_once '../../src/database/create.php';
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <form action="../../src/database/create.php" method="POST">
        <div class="flex justify-center align-center">
            <div class="bg-slate-100 rounded-lg">
                <div class="p-10">
                    <h1 class="flex justify-center align-center font-bold pb-5">
                        Cadastro de cliente
                    </h1>
                    <div>
                        <div>
                            <div>
                                <label for="nome">Nome:</label>
                                <input type="text" name="nome" class="rounded-lg h-8">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="nome">Idade:</label>
                                <input type="number" name="idade" class="rounded-lg h-8">
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="nome">Endereço:</label>
                                <input type="text" name="endereco" class="rounded-lg h-8" >
                            </div>
                        </div>
                        <div>
                            <div>
                                <label for="nome">CPF:</label>
                                <input type="number" name="cpf" class="rounded-lg h-8" >
                            </div>
                        </div>
                        <div>
                            <label for="nome">Sexo:</label>
                            <br>
                            <input type="radio" name="sexo" id="f" value="f">
                            <label for="Feminino">Feminino</label> <br>
                            <input type="radio" name="sexo" id="f" value="m">
                            <label for="Masculino">Masculino</label>
                        </div>
                    </div>
                    <div class="flex justify-center align-center rounded-md bg-sky-600 h-8">
                        <input type="submit" value="Criar">
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>