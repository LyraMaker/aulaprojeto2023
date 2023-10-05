<?php
require "Autor.php";
require "Livro.php";

$autor = new Autor("171","Anderson Mirô","Rua Xyz","(21) 9 9999-9999","contato@eu.com");
$livro = new Livro("00001","Poeira em Alto Mar","Romance",$autor);


echo "---------------------".PHP_EOL;
echo $livro->exibirAutor()->exibirNomeAutor();