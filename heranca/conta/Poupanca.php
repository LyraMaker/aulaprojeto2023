<?php

class Poupanca extends Conta
{
    public function __construct(string $numero, string $agencia){
        parent::__construct($numero, $agencia);
      
    }
    public function saque(float $valor)
    {
        $taxa = $valor * 0.05;
        $saqueTotal = ($valor + $taxa);
        parent::saque($saqueTotal);
        return "Foi retirado da sua conta o valor de R$ $saqueTotal \n Agora você tem R$ {$this->getSaldo()}";
    }
}