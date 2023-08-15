<?php

class Produto{
    var $Codigo;
    var $Descricao;
    var $Preco;
    var $Quantidade;
    function imprimeEtiqueta(){
        echo "Código: {$this->Codigo} ";
        echo "Nome do cd {$this->Descricao} \n";
        echo " | {$this->Preco} \n";
        echo "Quantidade disponível {$this->Quantidade}";
    }
}

$cd = new Produto(); // Instanciando um objeto

$cd->Codigo = "001";
$cd->Descricao = "As Melhores de Roberto Carlos";
$cd->Preco = "R$ 50,00";
$cd->Quantidade = "20";

$cd->imprimeEtiqueta();

