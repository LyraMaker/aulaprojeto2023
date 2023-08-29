<?php

require "conexao.php";
require "Autor.php";
require "RepositorioAutor.php";

//$autor = new Autor("002","Dora Raposo","Rua XYZ","(21) 9090-9090","email@email.com");

$repAutor = new RepositorioAutor();

//$repAutor->cadastrar($banco,$autor);

$valores = $repAutor->exibirTudo($banco);

echo $valores[1]['nomeautor'];