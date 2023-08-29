<?php
require "conexao.php";
require "Autor.php";
require "RepositorioAutor.php";
$repAutor = new RepositorioAutor();

$autor1 = new Autor("003","Antônio Constâncio","Rua Rua","7070-7070","inteiro@email.com");
$autor2 = new Autor("004","Carlos Roberto","Rua Vasco","7070-7070","gigantedacolina@email.com");
$autor3 = new Autor("005","Constâncio Na'Perca","Rua Flamengo","7070-7070","ficounocheirinho@tri.com");

$repAutor->cadastrar($banco,$autor1);
$repAutor->cadastrar($banco,$autor2);
$repAutor->cadastrar($banco,$autor3);