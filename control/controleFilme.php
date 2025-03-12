<?php

include '../model/crudFilme.php';

$opcao=$_POST["opcao"];

switch($opcao){
    case 'cadastrar':
        cadastrarFilme($_POST["nomfil"],
        $_POST["datafil"], $_POST["codusu"]);
        header("Location: ../view/mostrarFilmes.php");
        break;
    case 'editar':
        editarFilme($_POST["codfil"], $_POST["nomfil"],
        $_POST["datafil"]);
        header ("Location: ../view/mostrarFilmes.php");
        break;
    case 'excluir':
        excluirFilme($_POST["codfil"]);
        header ("Location: ../view/mostrarFilmes.php");
        break;
}
?>