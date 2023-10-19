<?php
require "Pessoa.php";
require "Fisica.php";
require "Juridica.php";

$fisica = new Fisica("0001","Gebê","Rua PHP","111.111.111.00");
$juridica = new Juridica("0002","Gebê Informática","Rua PHP","18.000.000/00001-39");
echo $fisica->getNome().PHP_EOL;
echo $juridica->getNome().PHP_EOL;