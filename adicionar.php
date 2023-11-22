<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Carro</title>

</head>
<body>
    <?php
    require 'conexao.php';
    if ($conexao = false)
    {
        die ("Não foi possível conectar ao banco de dados " . $e->getMessage() . " clique <a href = 'paginic.php'>aqui</a> para voltar a página inicial");
    }
    else
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            $placa = filter_input(INPUT_POST, 'placa');
            $modelo = filter_input(INPUT_POST, 'modelo');
            $marca = filter_input(INPUT_POST, 'marca');
            $ano = filter_input(INPUT_POST, 'ano');
            $cor = filter_input(INPUT_POST, 'cor');

            $verif = $mysql->query("SELECT * FROM carros WHERE placa = '$placa'");

            if(mysqli_num_rows($verif) > 0)
            {
                print "Já existe um carro com essa placa, aperte <a href = 'cadastro.php'>aqui</a> para retornar";
            }
            else
            {
                $result_add = "INSERT INTO carros (placa, modelo, marca, ano, cor) VALUES ('$placa', '$modelo', '$marca', '$ano', '$cor')";
                $resulta_add = mysqli_query($mysql, $result_add);
                header("Location: listar.php");
            }
        }
    }
    ?>
</body>
</html>