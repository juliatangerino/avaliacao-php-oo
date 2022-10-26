<?php
require_once("./src/database/view.php");
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastros</title>

    <!-- Tailwind css -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        'poppins': ['Poppins']
                    }
                }
            }
        }
    </script>

    <!-- Style -->
    <link rel="stylesheet" href="./src/assets/style/style.css">

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Google Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
</head>

<body class="font-['Poppins'] bg-gray-50">

    <!-- top navbar -->
    <nav class="bg-gray-900 px-8 sm:px-4 py-2.5">
        <div class="flex flex-wrap justify-between items-center mx-auto ">
            <div class="flex justify-start items-center">
                <span class="material-symbols-rounded text-white text-4xl">
                    menu
                </span>
            </div>

            <div class="flex justify-center items-center md:order-2 mx-2">
                <button type="button" class="flex items-center text-white bg-gray-800 hover:bg-gray-600 focus:ring-4 focus:outline-none focus:bg-gray-400 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 border-2 border-gray-700">
                    <span class="material-symbols-rounded pr-2">
                        logout
                    </span>
                    Sair
                </button>
            </div>
        </div>
    </nav>

    <div class="flex items-start justify-center">

        <!-- Menu vertical -->
        <div class="flex flex-col w-72 h-screen px-4 pt-6 pb-8 bg-gray-900">
            <h2 class="text-3xl font-semibold text-gray-50">Cadastro de clientes</h2>

            <div class="relative mt-8">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                    <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                        <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </span>

                <input type="text" class="w-full py-2 pl-10 pr-4 text-gray-700 bg-white border rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 dark:focus:border-blue-300 focus:ring-blue-300 focus:ring-opacity-40 focus:outline-none focus:ring" placeholder="Search" />
            </div>

            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav>
                    <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-md dark:bg-gray-700 dark:text-gray-200" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Dashboard</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Contas</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Tickets</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Ajustes</span>
                    </a>

                    <hr class="my-6 border-gray-200 dark:border-gray-600" />

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Suporte</span>
                    </a>

                    <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M10.3246 4.31731C10.751 2.5609 13.249 2.5609 13.6754 4.31731C13.9508 5.45193 15.2507 5.99038 16.2478 5.38285C17.7913 4.44239 19.5576 6.2087 18.6172 7.75218C18.0096 8.74925 18.5481 10.0492 19.6827 10.3246C21.4391 10.751 21.4391 13.249 19.6827 13.6754C18.5481 13.9508 18.0096 15.2507 18.6172 16.2478C19.5576 17.7913 17.7913 19.5576 16.2478 18.6172C15.2507 18.0096 13.9508 18.5481 13.6754 19.6827C13.249 21.4391 10.751 21.4391 10.3246 19.6827C10.0492 18.5481 8.74926 18.0096 7.75219 18.6172C6.2087 19.5576 4.44239 17.7913 5.38285 16.2478C5.99038 15.2507 5.45193 13.9508 4.31731 13.6754C2.5609 13.249 2.5609 10.751 4.31731 10.3246C5.45193 10.0492 5.99037 8.74926 5.38285 7.75218C4.44239 6.2087 6.2087 4.44239 7.75219 5.38285C8.74926 5.99037 10.0492 5.45193 10.3246 4.31731Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 12C15 13.6569 13.6569 15 12 15C10.3431 15 9 13.6569 9 12C9 10.3431 10.3431 9 12 9C13.6569 9 15 10.3431 15 12Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="mx-4 font-medium">Configurações</span>
                    </a>
                </nav>

                <div class="flex items-center px-4 -mx-2">
                    <img class="object-cover mx-2 rounded-full h-10 w-10" src="./src/assets/img/profile-icon.png" alt="avatar" />
                    <h4 class="mx-2 font-medium text-gray-800 dark:text-gray-200 hover:underline">Juliana Tangerino</h4>
                </div>
            </div>
        </div>

        <!-- Container -->
        <div class="container mx-auto">
            <div class="flex flex-wrap pt-8 pb-2 w-full">
                <div class="w-full">
                    <nav class="relative flex flex-wrap items-center justify-between px-2 py-3 bg-cyan-900 rounded-lg">
                        <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
                            <div class="w-full relative flex justify-between lg:w-auto px-4 lg:static lg:block lg:justify-start">
                                <a class="flex items-center text-lg mr-4 py-2 uppercase text-white" href="#">
                                    <span class="material-symbols-rounded pr-4">
                                        folder_open
                                    </span>
                                    Clientes cadastrados
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>

            <!-- Graficos -->
            <div class="flex items-center justify-center gap-x-5 py-8">
                <div class="w-1/2 h-auto p-8 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                    <a href="#">
                        <div>
                            <canvas id="chartLine"></canvas>
                        </div>
                    </a>
                </div>
                <div class="w-1/2 h-auto p-8 bg-white rounded-lg border border-gray-200 shadow-md hover:bg-gray-100">
                    <a href="#">
                        <div>
                            <canvas id="chartBar"></canvas>
                        </div>
                    </a>
                </div>
            </div>


            <div class="flex items-center py-2">
                <div class="w-full">
                    <form class="flex items-center">
                        <label for="simple-search" class="sr-only">Search</label>
                        <div class="relative w-full">
                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5" placeholder="Search" required>
                        </div>
                    </form>
                </div>
                <div class="flex items-center justify-end ml-8">
                    <a href="./src/screens/create.php" class="flex items-center justify-center bg-cyan-700 p-1.5 px-4 text-white text-sm rounded-lg ">
                        <span class="material-symbols-rounded pr-2 py-0.5 text-xl">
                            add_circle
                        </span>
                        Cadastrar
                    </a>
                </div>
            </div>
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-200">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                ID
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nome
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Idade
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Endereço
                            </th>
                            <th scope="col" class="px-6 py-3">
                                CPF
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Sexo
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($data as $record) : ?>
                            <tr class="border-b odd:bg-white even:bg-gray-100">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo $record['id_cliente']; ?>
                                </th>
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    <?php echo $record['nome']; ?>
                                </th>
                                <td class="px-6 py-4">
                                    <?php echo $record['idade']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $record['endereco']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $record['cpf']; ?>
                                </td>
                                <td class="px-6 py-4">
                                    <?php echo $record['sexo']; ?>
                                </td>
                                <td class="px-6 py-4 text-right flex items-center justify-flex-start">
                                    <a href="./src/screens/show.php?show=<?= $record['id_cliente'] ?>" class="font-medium mr-5 text-gray-600 hover:underline">
                                        <span class="material-symbols-rounded">
                                            visibility
                                        </span>
                                    </a>
                                    <a href="./src/screens/edit.php?edit=<?= $record['id_cliente'] ?>" class="font-medium mr-5 text-gray-600 hover:underline">
                                        <span class="material-symbols-rounded">
                                            edit
                                        </span>
                                    </a>
                                    <a href="./src/database/delete.php?delete=<?= $record['id_cliente'] ?>" class="font-medium text-red-400 hover:underline">
                                        <span class="material-symbols-rounded">
                                            delete
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>

<!-- Required chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<!-- Chart line -->
<script>
    const labels = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"];
    const data = {
        labels: labels,
        datasets: [{
                label: "Ganhos",
                backgroundColor: "#b1e89c",
                borderColor: "#b1e89c",
                data: [0, 10, 5, 2, 20, 30, 45],
            },
            {
                label: "Percas",
                backgroundColor: "#f77777",
                borderColor: "#f77777",
                data: [0, 2, 5, 2, 10, 14, 20],
            }
        ],

    };

    const configLineChart = {
        type: "line",
        data,
        options: {},
    };

    var chartLine = new Chart(
        document.getElementById("chartLine"),
        configLineChart
    );
</script>

<!-- Chart bar -->
<script>
    const labelsBarChart = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho"];
    const dataBarChart = {
        labels: labelsBarChart,
        datasets: [{
            label: "Vendas",
            backgroundColor: "#0a92b5",
            borderColor: "#0a92b5",
            data: [0, 10, 5, 2, 20, 30, 45],
        }, ],
    };

    const configBarChart = {
        type: "bar",
        data: dataBarChart,
        options: {},
    };

    var chartBar = new Chart(
        document.getElementById("chartBar"),
        configBarChart
    );
</script>