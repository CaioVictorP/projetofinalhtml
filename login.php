<?php
include('conexao.php');
if(!isset($_SESSION))
{
    session_start();
}
if(isset($_SESSION['nome']))
{
    header("Location: index.php");;
}
if(isset($_POST['usuario']) || isset($_POST['senha']))
{
    if(strlen($_POST['usuario']) == 0)
    {
        echo "Preencha seu login";
    }
    else if(strlen($_POST['senha']) == 0)
    {
        echo "Preencha sua senha";
    }
    else
    {
        $usuario = $mysql->real_escape_string($_POST['usuario']);
        $password = $mysql->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$password'";
        $sql_query = $mysql->query($sql_code) or die("Falha na execução do código SQL" . $mysql->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1)
        {
            $login = $sql_query->fetch_assoc();

            if(!isset($_SESSION))
            {
                session_start();
            }
            
            $_SESSION['nome'] = $login['nome'];

            header("Location: index.php");
        }
        else
        {
            echo("Falha ao logar! Verifique o seu e-mail e sua senha");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem vindo!</title>
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
                    <a class="nav-link" href="registro.php">Criar conta</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="page-header header container-fluid">
        <div class="overlay"></div>
        <div class="description">
            <h1>Insira seu login e sua senha</h1>
            <form action= "" method = "POST">
                <p>
                    <label>Login</label>
                    <input type = "text" name = "usuario">
                </p>
                <p>
                    <label>Senha</label>
                    <input type = "password" name = "senha">
                </p>
                <p>
                    <button type = "submit" class="btn btn-outline-secondary btn-lg">Logar</button>
                </p>
            </form>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src = "script.js"></script>
</body>
</html>