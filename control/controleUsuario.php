<?php
include '../model/crudUsuario.php';
$opcao = $_POST["opcao"];

switch ($opcao) {
    case 'Cadastrar':
        $cadastrou = cadastrarUsuario($_POST["nomusu"], sha1($_POST["senha"]));
        if ($cadastrou == "sim") {
            echo "<script>alert('Conta criada com sucesso!');</script>";
            echo "<script>window.location ='../view/telaLogin.php';</script>";
        } else {
            echo "<script>alert('Usuário já existe!');</script>";
            echo "<script>window.location ='../view/cadastrarUsuario.php';</script>";
        }
        break;
    case 'Entrar':
        $nome = $_POST["nomusu"];
        $senha = sha1($_POST["senha"]);
        $resultados = buscarUsuario($nome);
        foreach ($resultados as $banco)
            ;
        if ($nome == $banco["nomusu"]) {
            if ($senha == $banco["senha"]) {
                session_start();
                $_SESSION["nome"] = $nome;
                $_SESSION["codigo"] = $banco["codusu"]; /////////
                header("Location: ../view/mostrarFilmes.php");
            } else {
                echo "<script>alert('Senha Incorreta!');</script>";
                echo "<script>window.location ='../view/telaLogin.php';</script>";
            }
        } else {
            echo "<script>alert('Nome Incorreto!');</script>";
            echo "<script>window.location = '../view/telaLogin.php';</script>";
        }
        break;
    case 'Sair':
        session_start();
        session_destroy();
        echo "<script>window.location = '../view/telaLogin.php';</script>";
        break;
}
?>