<?php

require "conexao.php";

$tabela = "CREATE TABLE IF NOT EXISTS AUTOR(
    nomeautor TEXT,
    endautor TEXT,
    telautor TEXT,
    email TEXT,
    primary key (nomeautor))";

$banco->query($tabela);