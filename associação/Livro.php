<?php
class Livro{
    private string $codigo;
    private string $nome;
    private string $genero;
    private Autor $autor;

    public function __construct($codigo,$nome,$genero,$autor){
        $this->definirCodigo($codigo);
        $this->definirNome($nome);
        $this->definirGenero($genero);
        $this->definirAutor($autor);
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

    public function definirAutor(Autor $autor){
        $this->autor = $autor;
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

    public function exibirAutor(){
        return $this->autor;
    }
}
?>