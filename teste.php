<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Carros</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<nav class="navbar navbar-expand-md">
        <a class="navbar-brand" href="index.php">Logo</a>
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
                        echo '<a class="nav-link" href="login.php">Logar</a></li><li class = "nav-item"><a class="nav-link" href = "registro.php">Criar conta</a></li>';
                    } 
                    else
                    {
                        echo '<a class="nav-link" href="logout.php">Sair</a>';
                    } 
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <header class="page-header header container-fluid">
        <div class = "description2">
        <div class="row">
            <div class="col-xl-6 mb-4">
                <div class="card text-center">
                    <div class = "card-header">
                        <p class="text-body">Huracán Performante</p>
                    </div>
                    <div class="card-body">
                        <div class="description2">
                            <p class="text-body">Marca: Lamborghini<br>Ano: 2020<br>Cor: Amarelo<br>Placa: MSA0E32</p>
                        </div>
                    </div>
                    <div class="card-footer border-0 bg-body-tertiary p-2 d-flex justify-content-around">
                        <a
                            class="btn btn-outline-secondary btn-lg"
                            href="#"
                            role="button"
                            data-ripple-color="primary"
                            data-mdb-ripple-init
                            >Editar<i class="fas fa-envelope ms-2"></i>
                        </a>
                        <a
                            class="btn btn-outline-secondary btn-lg"
                            href="#"
                            role="button"
                            data-ripple-color="primary"
                            data-mdb-ripple-init
                            >Excluir<i class="fas fa-phone ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>