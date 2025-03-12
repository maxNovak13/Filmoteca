<?php

include 'conexaoBD.php';

function cadastrarUsuario($nomusu, $senha)
{
    connect();
    $resultados = query("SELECT * FROM usuario WHERE nomusu ='$nomusu'");
    if (mysqli_num_rows($resultados) > 0) {
        $cadastrou = 'não';
    } else {
        query("INSERT INTO usuario (nomusu, senha) VALUES ('$nomusu','$senha')");
        $cadastrou = 'sim';
    }
    close();
    return $cadastrou;
}


function buscarUsuario($nomusu)
{
    connect();
    $resultados = query("SELECT * FROM usuario WHERE nomusu='$nomusu'");
    close();
    return $resultados;
}

?>