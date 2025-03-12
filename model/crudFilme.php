<?php

include 'conexaoBD.php';

function cadastrarFilme($nomfil, $datafil, $codusu)
{
    connect();
    query("INSERT INTO filme (nomfil, datafil, codusu) 
    VALUES ('$nomfil', '$datafil', $codusu)");
    close();
}

function mostrarFilmes($codusu)
{
    connect();
    $resultados = query("SELECT * FROM filme
    WHERE codusu=$codusu");
    close();
    return $resultados;
}

function mostrarFilmeAlterar($codfil)
{
    connect();
    $resultados = query("SELECT * FROM filme WHERE codfil=$codfil");
    close();
    return $resultados;
}

function editarFilme($codfil, $nomfil, $datafil)
{
    connect();
    query("UPDATE filme SET nomfil='$nomfil',
     datafil='$datafil' WHERE codfil=$codfil");
    close();
}

function excluirFilme($codfil)
{
    connect();
    query("DELETE FROM filme
    WHERE codfil=$codfil");
    close();
}
?>