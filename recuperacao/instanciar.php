<?php
require "Aluno.php";

$marlon = new Aluno("Marlon",10,9); // isso é a instância

$joao = new Aluno("Joao",10,null);

var_dump($marlon);
var_dump($joao);