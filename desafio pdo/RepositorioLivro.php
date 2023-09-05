<?php
class RepositorioLivro{
    
    public function cadastrar(PDO $banco, Livro $livro)
    {
        $sqlInsert = "INSERT INTO AUTOR(codigo,nome,genero) VALUES (:c,:n,:g)";

        $insert = $banco->prepare($sqlInsert);

        $codigo = $livro->exibirCodigo();
        $nome = $livro->exibirNome();
        $genero = $livro->exibirGenero();
     
        $insert->bindParam(":c", $codigo);
        $insert->bindParam(":n", $nome);
        $insert->bindParam(":g", $genero);
    

        $insert->execute();
    }

    public function exibirTudo(PDO $banco){
        $sql = "SELECT * FROM LIVRO";
        $dado = $banco->query($sql); //Executa a query no banco
        return $dado->fetchAll(PDO::FETCH_ASSOC); //Estrutura os valores como um objeto
    }
}