<?php
if(!isset($_SESSION))
{
    session_start();
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
                    <?php if(!isset($_SESSION['nome']))
                    {
                        echo '<a class="nav-link" href="login.php">Logar</a></li><li class = "nav-item"><a class="nav-link" href = "registro.php">Criar conta</a></li>';
                    } 
                    else
                    {
                        echo '<a class="nav-link" href="logout.php">Sair</a></li><li class="nav-item"><a class="nav-link" href="cadastro.php">Cadastro</a>';
                    } 
                    ?>
                </li>
            </ul>
        </div>
    </nav>
    <header class="page-header header container-fluid">
        <div class = "description2">
            <h1>Aprenda um pouco sobre carros</h1>
        </div>
            <p class = "description3">
                Automóvel (do grego αὐτός ["autós"], "por si próprio", e do latim mobilis, "mobilidade", como referência a um objeto responsável pela sua própria locomoção e/ou de outras pessoas em consoante) ou carro (das línguas celtas, através do latim carru) é um veículo motorizado com rodas usado para transporte. A maioria das definições de carro diz que eles correm basicamente em estradas, acomodam de uma a oito pessoas, têm quatro pneus e, principalmente, transportam pessoas em vez de mercadorias
            </p>
            <p class = "description3">
                Os carros entraram em uso global durante o século XX e as economias desenvolvidas dependem deles. O ano de 1886 é considerado como o ano de nascimento do carro moderno, quando o inventor alemão Karl Benz patenteou seu Benz Patent-Motorwagen. Os carros tornaram-se amplamente disponíveis no início do século XX. Um dos primeiros carros acessíveis às massas foi o 1908 Model T, um carro norte-americano fabricado pela Ford Motor Company. Os carros foram rapidamente adotados nos Estados Unidos, onde substituíram carruagens e carros puxados por animais, mas demoraram muito mais para serem aceitos na Europa Ocidental e em outras partes do mundo.
            </p>
            <p class = "description3">
                Os carros têm controles de direção, estacionamento, conforto para os passageiros e uma variedade de luzes. Ao longo das décadas, recursos e controles adicionais foram adicionados aos veículos, tornando-os progressivamente mais complexos. Estes incluem câmeras de marcha à ré, ar condicionado, sistema de navegação por satélite e entretenimento no carro. Em 1991, Roger Billings desenvolveu o primeiro carro elétrico movido pela energia de uma célula de combustível a hidrogênio. A maioria dos carros em uso na década de 2010 é impulsionada por um motor de combustão interna, alimentado pela combustão de combustíveis fósseis. Os carros elétricos, que foram inventados no início da história do carro, começaram a se tornar comercialmente disponíveis em 2008.
            </p>
            <p class = "description3">
                Existem custos e benefícios para o uso do carro. Os custos para o indivíduo incluem a aquisição do veículo, pagamentos de juros (se o carro for financiado), reparos e manutenção, combustível, depreciação, tempo de direção, taxas de estacionamento, impostos e seguro. Os custos para a sociedade incluem a manutenção de estradas, o uso da terra, congestionamentos, a poluição do ar, a saúde pública e a eliminação do veículo no final da sua vida útil. Os acidentes de trânsito são a maior causa de mortes relacionadas a ferimentos em todo o mundo. Os benefícios pessoais incluem transporte sob demanda, mobilidade, independência e conveniência. Os benefícios sociais incluem benefícios econômicos, como criação de emprego e riqueza da indústria automotiva, fornecimento de transporte, bem-estar social por oportunidades de lazer e viagens e geração de receita dos impostos. A capacidade das pessoas de se mover de forma flexível de um lugar para outro tem implicações de longo alcance para a natureza das sociedades. Existem cerca de 1 bilhão de carros em uso em todo o mundo. Os números estão aumentando rapidamente, especialmente na China, na Índia e em outros países recentemente industrializados.
            </p>
    </header>
    <h1 class = "description2">Alguns exemplos dos variados tipos de carro</h1>
    <div class="container features">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Sedã</h3>
                <img src="civichonda.jpg" class="img-fluid">
                <p>Esse modelo é um clássico e muito querido no mercado. Sedã é a categoria de carros que possui três volumes: o porta-malas, a cabine e o compartimento do motor. Essa categoria é mais confortável e acomoda até cinco pessoas sem problemas. 

Os sedãs são ótimas opções para quem quer conforto e versatilidade, sendo um excelente modelo para quem precisa acomodar toda a família. Porém, ocupam mais espaço que os hatches e podem não caber em qualquer vaga na rua. Os sedãs se dividem nas versões: compacto, médio e de luxo.</p>
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">Hatch</h3>
                <img src="golvolks.jpg" class="img-fluid">
                <p>Hatch ou hatchback é a categoria de carros chamada de dois volumes, motor e cabine de passageiros com porta-malas. Esses veículos são mais compactos porque possuem o porta-malas anexado à cabine. Assim, os hatches muitas vezes são listados com um número ímpar de portas. 

Por ser um modelo mais barato, é um dos tipos mais vendidos. Os motores desse modelo costumam não ser muito potentes, porém são mais econômicos. É uma opção muito vantajosa para quem precisa de um carro compacto para estacionar na rua ou manobrar na garagem do prédio.</p>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <h3 class="feature-title">SUV</h3>
                <img src="jeepcompass.webp" class="img-fluid">
                <p>SUV é a sigla para Sport-Utility Vehicle ou veículo utilitário esportivo. Os modelos dessa categoria geralmente apresentam um visual mais robusto com uma carroceria alta e ampla. São ideais para transportar pessoas e cargas. São mais elevados para ultrapassarem obstáculos com mais facilidade e trafegam bem em terrenos mais acidentados. Os utilitários esportivos costumam trazer uma boa quantidade de tecnologia embutida e são bastante versáteis. </p>
            </div>
        </div>
    </div>
    <div id="btnTop">
        <i class="arrow up"></i>
    </div>
    <script type="text/javascript">
        const btn = document.getElementById("btnTop")

        btn.addEventListener("click", function(){
            window.scrollTo(0,0)
        })

        document.addEventListener('scroll',ocultar)

        function ocultar(){
            if(window.scrollY > 20){
                btn.style.display = "flex"
            } else {
                btn.style.display = "none"
            }
        }

        ocultar()
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>