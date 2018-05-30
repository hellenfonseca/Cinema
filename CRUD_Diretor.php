<?php

class CRUD_Diretor{

    public function insert(){
        try{
            require "bootstrap.php";

            $diretor = new Diretor;            
            $diretor->setNome($_POST["nome"]);
            $diretor->setEndereco($_POST["endereco"]);
            $diretor->setTelefone($_POST["telefone"]);
            $diretor->setEmail($_POST["email"]);

            $entityManager->persist($diretor); 
            $entityManager->flush();

            echo ("Diretor Cadastrado!");     
        }
        catch(Exception $e){
            echo ("Erro!");              
        }
    }

    public function update(){
        try{
            require "bootstrap.php";

            $diretor = $entityManager->find('Diretor', $_POST["id"]);    

            $diretor->setNome($_POST["nome"]);
            $diretor->setEndereco($_POST["endereco"]);
            $diretor->setTelefone($_POST["telefone"]);
            $diretor->setEmail($_POST["email"]);

            $entityManager->persist($diretor); 
            $entityManager->flush();

            echo ("Diretor Atualizado!");     
        }
        catch(Exception $e){
            echo ("Erro!");              
        }
    }

    public function delete(){
        try{
            require "bootstrap.php";
            
            $diretor = $entityManager->find('Diretor', $_POST["id"]);    

            $entityManager->remove($diretor); 
            $entityManager->flush();

            echo ("Diretor Deletado!");     
        }
        catch(Exception $e){
            echo ("Erro!");              
        }
    }

    public function getAll(){
        require "bootstrap.php";
        $diretores = $entityManager->getRepository("Diretor")->findAll();
        return $diretores;
    }
}
?>