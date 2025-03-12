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
    <title>Mostrar Livros</title>
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
                            // session_start();
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
            <h1><br>Visualizar Filmes</h1>

            <?php
            include '../model/crudFilme.php';

            $codusu = $_SESSION['codigo'];
            
            $resultados = mostrarFilmes($codusu);
            if (mysqli_num_rows($resultados) > 0) {
                echo "<table class='table table-striped'>
                        <thead>
                            <tr>
                                <th scope='col'>Nome</th>
                                <th scope='col'>Data de lançamento</th>
                                <th scope='col'>Opção</th>
                            </tr>
                        </thead>
                        <tbody>
                ";
                foreach ($resultados as $linha) {
                    echo "
                                <tr>
                                    <td>$linha[nomfil]</td>
                                        <td>$linha[datafil]</td>
                                        <td><a class='btn btn-dark' style='background-color:#FFA500; border-color:#FFA500;' href='editarFilme.php?codfil=$linha[codfil]'>Editar</a></td>
                                </tr>
                            ";
                }
                echo "      </tbody>
                        </table>";
            } else {
                echo "<p><br>Ops... não há filmes cadastrados, clique <a href='cadastrarFilme.php'>aqui</a> para cadastrar.</p>";
            }
            ?>

        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>