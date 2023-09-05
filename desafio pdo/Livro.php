<?php
class Livro{
    private string $codigo;
    private string $nome;
    private string $genero;

    public function __construct($codigo,$nome,$genero){
        $this->definirCodigo($codigo);
        $this->definirNome($nome);
        $this->definirGenero($genero);
    }

    public function definirCodigo(string $codigo){
        $this->codigo = $codigo;
    }

    public function definirNome(string $nome){
        $this->nome = $nome;
    }

    public function definirGenero(string $genero){
        $this->genero = $genero;
    }

    public function exibirCodigo(){
        return $this->codigo;
    }

    public function exibirNome(){
        return $this->nome;
    }

    public function exibirGenero(){
        return $this->genero;
    }
}
?>