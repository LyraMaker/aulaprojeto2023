<?php
require "conexao.php";
require "Autor.php";
require "RepositorioAutor.php";

$repAutor = new RepositorioAutor();

$todosAutores = $repAutor->exibirTudo($banco);

foreach($todosAutores as $autor){
    echo "\n -----------------------------------";
    echo "\n Nome do autor | {$autor['nomeautor']}";
    echo "\n Endereço      | {$autor['endautor']}";
    echo "\n Telefone      | {$autor['telautor']}";
    echo "\n E-mail        | {$autor['email']}";
    echo "\n -----------------------------------";
}