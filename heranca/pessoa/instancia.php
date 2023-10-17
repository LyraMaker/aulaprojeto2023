<?php
require "Pessoa.php";
require "Fisica.php";


$fisica = new Fisica("0001","Gebê Soluções","Rua PHP","111.111.111.00");
echo $fisica->getNome();