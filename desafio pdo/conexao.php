<?php

try{ //Tentar executar o comando dentro bloco
    $banco = new PDO("sqlite:banco.sqlite");
    echo "Banco conectado!";

}catch(PDOException $e){ //Caso dê erro, faça isso
    echo "Deu erro na conexão! ";
    echo $e->getMessage();
}

$tabela = "CREATE TABLE IF NOT EXISTS AUTOR(
    codigo TEXT,
    nomeautor TEXT,
    endautor TEXT,
    telautor TEXT,
    email TEXT,
    primary key (codigo))";

$banco->query($tabela);
