<?php

class RepositorioAutor
{
    public function cadastrar(PDO $banco, Autor $autor)
    {
        $sqlInsert = "INSERT INTO AUTOR(codigo,nomeautor,endautor,telautor,email) VALUES (:c,:n,:e,:t,:em)";

        $insert = $banco->prepare($sqlInsert);

        $codigo = $autor->exibirCodigo();
        $nome = $autor->exibirNomeAutor();
        $endereco = $autor->exibirEndAutor();
        $tel = $autor->exibirTelAutor();
        $email = $autor->exibirEmail();

        $insert->bindParam(":c", $codigo);
        $insert->bindParam(":n", $nome);
        $insert->bindParam(":e", $endereco);
        $insert->bindParam(":t", $tel);
        $insert->bindParam(":em", $email);

        $insert->execute();
    }

    public function exibirTudo(PDO $banco){
        $sql = "SELECT * FROM AUTOR";
        $dado = $banco->query($sql); //Executa a query no banco
        return $dado->fetchAll(PDO::FETCH_ASSOC); //Estrutura os valores como um objeto
    }
}