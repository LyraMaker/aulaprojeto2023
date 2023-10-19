<?php

class Fisica extends Pessoa{ //O extends vai permitir acessar os atributos e métodos da classe referenciada,por exemplo, Pessoa, no nosso caso Pessoa.
    public string $cpf;
    public function __construct(string $id, string $nome, string $endereco,string $cpf){
        parent::__construct($id,$nome,$endereco);
        $this->setCpf($cpf);
    }

    public function setCpf(string $cpf){
        $this->cpf = $cpf;   
    }

    public function getCpf(){
        return $this->cpf;  
    }
}