<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Tela de Login</title>
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
                            <a class="nav-link" href="telaLogin.php">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="cadastrarUsuario.php">Criar Conta</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <div class="container">
            <h1><br>Cadastrar conta</h1>
            <form method="POST" action="../control/controleUsuario.php">
                <div class="mb-3 ">
                    <label for="nomusu" class="form-label">Nome de usuário:</label>
                    <input type="text" class="form-control" id="nomusu" name="nomusu">

                </div>
                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" id="senha" name="senha">
                </div>
                <button type="submit" class="btn btn-success" name="opcao" value="Cadastrar"
                    style="background-color:#ff669c; border-color:#ff669c;">Criar Conta</button>
                <a class="btn btn-secondary" href="telaLogin.php" class="btn btn-dark">Voltar</a>
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>