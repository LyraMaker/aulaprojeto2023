<?php

require "conexao.php";
require "Autor.php";

$tabela = "CREATE TABLE IF NOT EXISTS AUTOR(
    codigo TEXT,
    nomeautor TEXT,
    endautor TEXT,
    telautor TEXT,
    email TEXT,
    primary key (codigo))";

$banco->query($tabela);

$autor = new Autor("001","Andrew Pascoal","Rua XYZ","(21) 9090-9090","email@email.com");

$sqlInsert = "INSERT INTO AUTOR(codigo,nomeautor,endautor,telautor,email) VALUES (:c,:n,:e,:t,:em)";

$insert = $banco->prepare($sqlInsert);

$codigo = $autor->exibirCodigo();
$nome = $autor->exibirNomeAutor();
$endereco = $autor->exibirEndAutor();
$tel = $autor->exibirTelAutor();
$email = $autor->exibirEmail();

$insert->bindParam(":c",$codigo); $insert->bindParam(":n",$nome); $insert->bindParam(":e",$endereco);
$insert->bindParam(":t",$tel); $insert->bindParam(":em",$email); 