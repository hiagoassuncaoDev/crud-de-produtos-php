<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Cadastro de Produtos</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="?page=cadastro">Cadastrar</a>
                    <a class="nav-link" href="?page=verprodutos">Ver Produtos</a>
                    
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php 
                    $paginaParaCarregar = $_GET["page"] ?? "boasvindas";
                    include("config.php");
                    switch($paginaParaCarregar){
                        case "atuarNoBanco":
                            include("atuarNoBanco.php");
                            break;
                        case "cadastro":
                            include("cadastro.php");
                            break;
                        case "verprodutos":
                            include("verprodutos.php");
                            break;
                        case "edicao":
                            include("edicao.php");
                            break;
                        case "exclusao":
                            include("exclusao.php");
                            break;
                        default:
                            include("boasvindas.php");
                    } 
                ?>
            </div>
        </div>
    </div>
</body>

</html>