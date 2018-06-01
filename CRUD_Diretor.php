<?php
include "mapeamento/Diretor.php";
class CRUD_Diretor{
    

    public function insert(){
        try{
            require "doctrine/bootstrap.php";

            $diretor = new Diretor;            
            $diretor->setNome($_POST["nome"]);
            $diretor->setEndereco($_POST["endereco"]);
            $diretor->setTelefone($_POST["telefone"]);
            $diretor->setEmail($_POST["email"]);

            $entityManager->persist($diretor); 
            $entityManager->flush();

            echo ("Diretor Cadastrado!");
            echo "<br><a href='index.php'>Voltar</a>";    
        }
        catch(Exception $e){
            echo ("Erro!");
            echo "<br><a href='index.php'>Voltar</a>";              
        }
    }

    public function update(){
        try{
            require "doctrine/bootstrap.php";

            $diretor = $entityManager->find('Diretor', $_POST["id"]);    

            $diretor->setNome($_POST["nome"]);
            $diretor->setEndereco($_POST["endereco"]);
            $diretor->setTelefone($_POST["telefone"]);
            $diretor->setEmail($_POST["email"]);

            $entityManager->persist($diretor); 
            $entityManager->flush();

            echo ("Diretor Atualizado!");  
            echo "<br><a href='index.php'>Voltar</a>";    
        }
        catch(Exception $e){
            echo ("Erro!");   
            echo "<br><a href='index.php'>Voltar</a>";            
        }
    }

    public function delete(){
        try{
            require "doctrine/bootstrap.php";
            
            $diretor = $entityManager->find('Diretor', $_POST["id"]);    

            $entityManager->remove($diretor); 
            $entityManager->flush();

            echo ("Diretor Deletado!");
            echo "<br><a href='index.php'>Voltar</a>";      
        }
        catch(Exception $e){
            echo ("Erro!");
            echo "<br><a href='index.php'>Voltar</a>";               
        }
    }

    public function getAll(){
        require "doctrine/bootstrap.php";
        $diretores = $entityManager->getRepository("Diretor")->findAll();
        return $diretores;
    }
}
?>