<?php

require "Aluno.php";
$marcos = new Aluno("0001","Marcos","Rua Marco Polo");

$carterinhaMarcos = $marcos->gerarCarterinha();

echo $carterinhaMarcos['Matricula'].PHP_EOL;
echo $carterinhaMarcos['Nome'].PHP_EOL;
echo $carterinhaMarcos['Endereco'].PHP_EOL;
echo $carterinhaMarcos['Turma'].PHP_EOL;