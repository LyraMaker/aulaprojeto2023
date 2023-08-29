<?php

require "conexao.php";
require "Autor.php";
require "RepositorioAutor.php";
$repAutor = new RepositorioAutor();

$valores = $repAutor->exibirTudo($banco);

echo $valores[1]['nomeautor'];