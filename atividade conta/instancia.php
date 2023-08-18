<?php 

require "Conta.php";

$novaConta = new Conta("0001","Andreson",0.0);

echo $novaConta->sacar(-1000);

var_dump($novaConta);