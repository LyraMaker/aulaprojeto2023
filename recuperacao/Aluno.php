<?php

class Aluno{
    public string $nome;
    public ?float $p1;
    public ?float $p2;

    public function __construct(string $valorNome, ?float $valorP1, ?float $valorP2){ //Assim que a classe é instanciada, esse método é executado
        $this->definirNome($valorNome);
        $this->definirP1($valorP1);
        $this->definirP2($valorP2);
    }
    public function definirNome(string $valorNome){
        $this->nome = $valorNome;
    }
    public function exibirNome():string{
        return $this->nome;
    }
    public function definirP1(?float $valorP1){
        $this->p1 = $valorP1;
    }
    public function exibirP1():float{
        return $this->p1;
    }
    public function definirP2(?float $valorP2){
        $this->p2 = $valorP2;
    }
    public function exibirP2():float{
        return $this->p2;
    }


}