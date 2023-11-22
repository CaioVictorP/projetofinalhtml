<?php
require 'conexao.php';

if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $placa = $_POST['placa'];
    $modelo = $_POST['modelo'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $cor = $_POST['cor'];

    $stmt = $mysql->query("UPDATE carros SET modelo = '$modelo', marca = '$marca', ano = '$ano', cor = '$cor' WHERE placa = '$placa'");

    header(("Location: listar.php"));
}
?>