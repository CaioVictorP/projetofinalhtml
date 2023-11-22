<?php
require ("conexao.php");

if ($conexao = false)
{
    die ("Não foi possível conectar ao banco de dados " . $e->getMessage() . " clique <a href = 'paginic.php'>aqui</a> para voltar a página inicial");
}
else if($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $nome = filter_input(INPUT_POST, 'nome');
    $usuario = filter_input(INPUT_POST, 'usuario');
    $senha = filter_input(INPUT_POST, 'senha');

    $verif = $mysql->query("SELECT * FROM usuarios WHERE usuario = '$usuario'");

    if(mysqli_num_rows($verif) > 0)
    {
        print ("Esse usuário já existe");
    }
    else
    {
        $result_add = "INSERT INTO usuarios (nome, usuario, senha, permissão) VALUES ('$nome', '$usuario', '$senha', '1')";
        $resulta_add = mysqli_query($mysql, $result_add);
        header("Location: login.php");
    }
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crie sua conta aqui</title>
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
                    <?php if(!isset($_SESSION))
                    {
                        session_start();
                    }
                    if(!isset($_SESSION['nome']))
                    {
                        echo '<a class="nav-link" href="login.php">Logar</a></li><li class = "nav-item"></li>';
                    } 
                    else
                    {
                        echo '<a class="nav-link" href="logout.php">Sair</a></li><li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastro</a></li>';
                    } 
                    ?>
            </ul>
        </div>
    </nav>
    <header class="page-header header container-fluid">
        <div class="overlay"></div>
        <div class = "description">
            <h1>Digite suas informações aqui</h1>
            <form action= "" method = "POST">
                <p>
                    <label>Nome</label>
                    <input type = "text" name = "nome">
                </p>
                <p>
                    <label>Login</label>
                    <input type = "text" name = "usuario">
                </p>
                <p>
                    <label>Senha</label>
                    <input type = "password" name = "senha">
                </p>
                <p>
                    <button type = "submit">Cadastrar</button>
                </p>
            </form>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>