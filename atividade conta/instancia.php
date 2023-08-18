<?php 

require "Conta.php";

$novaConta = new Conta("0001","Andreson",0.0);

$novaConta->definirNumero("oioi");

var_dump($novaConta);