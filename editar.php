<?php
include "protecao.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Carro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-md">
        <a href="index.php"><img src = "truck-kun.jpg" height="45"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#main-navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="main-navigation">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="listar.php">Lista</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Sair</a>
                </li>
                <li class = "nav-item">
                    <a class="nav-link" href = "cadastro.php">Cadastro</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="page-header header container-fluid">
        <div class="overlay"></div>
        <div class = "description">
        <h1>Editar Carro</h1><br>
        <?php
        require 'conexao.php';

        if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['placa']))
        {
            $placa = $_GET['placa'];
            $stmt = $mysql->query("SELECT * FROM carros WHERE placa = '$placa'");
            $carro = $stmt->fetch_array();
            if ($carro)
            {
                echo '<form action="atualizar.php" method="post">';
                echo '<input type="hidden" name="placa" value="' . $carro['placa'] . '">';
                echo '<label for="modelo">Modelo do Carro:</label>';
                echo '<input type="text" name="modelo" value="' . $carro['modelo'] . '" required';
                echo '<label for="marca">Marca do Carro:</label>';
                echo '<input type="text" name="marca" value="' . $carro['marca'] . '" required';
                echo '<p></p><label for="ano">Ano do Carro:</label>';
                echo '<input type="number" name="ano" value="' . $carro['ano'] . '" required';
                echo '<label for="cor">Cor do Carro:</label>';
                echo '<input type="text" name="cor" value="' . $carro['cor'] . '" required<p></p>';
                echo '<button type="submit">Atualizar</button>';
                echo '</form>';
            }
            else
            {
                echo '<p>Carro não encontrado</p>';
            }
        }
        else
        {
            echo '<p>Parâmetros inválidos.</p>';
        }
        ?>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>