<?php
require "Conta.php";
require "Poupanca.php";

$poupanca = new Poupanca("001","435");

var_dump($poupanca);
$poupanca->depositar(200);

$poupanca->saque(100);

echo "------------------------ \n";


var_dump($poupanca);