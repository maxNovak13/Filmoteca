<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header("Location: telaLogin.php");
}
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Livro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header>
        <div id="cabecalho">
            <nav class="navbar " style="background-color: #353535;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../img/cinema.png" alt="Logo" width="60" height="60"
                            class="d-inline-block align-text-middle">
                    </a>
                    <h1 style="color: #FFD700">Filmoteca</h1>
                    <form method="post" action="../control/controleUsuario.php">
                        <a style="color:#FFFFFF;">
                            <?php
                            //session_start();
                            echo $_SESSION['nome'], '&nbsp&nbsp&nbsp';
                            ?>
                        </a>
                        <button type="submit" name="opcao" class="btn btn-danger" value="Sair">Sair</button>
                    </form>
                </div>
            </nav>
        </div>

        <nav class="navbar navbar-expand-lg" style="background-color:#DCDCDC;">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Filmoteca</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="mostrarFilmes.php">Visualizar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrarFilme.php">Cadastrar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <div class="container">
            <h1><br>Editar Filme</h1>
            <?php
            include '../model/crudFilme.php';
            $codfil = $_GET["codfil"];
            $resultados = mostrarFilmeAlterar($codfil);
            foreach ($resultados as $linha) {
            }
            ?>
            <form method="POST" action="../control/controleFilme.php">
                <div class="mb-3">
                    <label for="nomfil" class="form-label">Nome:</label>
                    <input type="text" class="form-control" id="nomfil" name="nomfil" placeholder="digite o nome"
                        value="<?php echo $linha['nomfil'] ?>">
                </div>
                <div class="mb-3">
                    <label for="datafil" class="form-label">Data de lançamento:</label>
                    <input type="text" class="form-control" id="datafil" name="datafil" placeholder="dd/mm/aaaa"
                        value="<?php echo $linha['datafil'] ?>" aria-describedby="dataHelp"
                        title="Digite a data no formato dd/mm/aaaa" required>
                    <div id="dataHelp" class="form-text">Formato dd/mm/aaaa</div>
                </div>
                <input type="hidden" name="codfil" value="<?php echo $linha['codfil'] ?>">
                <button type="submit" class="btn btn-primary" name="opcao" value="editar"
                    style="background-color:#FFA500; border-color:#FFA500;">Editar</button>
                <button type="submit" class="btn btn-danger" name="opcao" value="excluir">Excluir</button>
                <a class="btn btn-light" href="mostrarFilmes.php">Cancelar</a>
            </form>
        </div>
    </main>
    <script src="jquery-3.7.1.min.js" type="text/javascript"></script>
    <script src="jquery.maskedinput.js" type="text/javascript"></script>
    <script src="mascaras.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>