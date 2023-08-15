<?php
require "Conta.php";

$conta1 = new Conta("001","Gabriel", 0,500);

echo $conta1->sacar(300);

var_dump($conta1);
?>