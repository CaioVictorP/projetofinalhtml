<?php
$host = "localhost";
$username = "root";
$password = "";

try
{
    $mysql = new mysqli($host, $username, $password);

    $mysql->execute_query("CREATE DATABASE IF NOT EXISTS carros_db");
    $mysql->query("USE carros_db");

    $mysql->execute_query("CREATE TABLE IF NOT EXISTS carros
    (
        placa VARCHAR(7) NOT NULL PRIMARY KEY,
        modelo VARCHAR(100) NOT NULL,
        marca VARCHAR(100) NOT NULL,
        ano INT(5) NOT NULL,
        cor VARCHAR(50) NOT NULL
    )");

    $mysql->execute_query("CREATE TABLE IF NOT EXISTS usuarios
    (
        usuario VARCHAR(100) NOT NULL PRIMARY KEY,
        senha VARCHAR(25) NOT NULL,
        nome VARCHAR(200) NOT NULL,
        permissão INT(9) NOT NULL
    )");
    

} catch(PDOException $e)
{
    $conexao = false;
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>