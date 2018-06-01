<?php

require "CRUD_Diretor.php";
$diretor = new CRUD_Diretor();

if(isset($_POST["create"])){
    try{
        $diretor->insert($_POST);
    }
    catch(Exception $e){
        echo "deu erro no create";
    };
}
else if(isset($_POST["update"])){
    try{
        $diretor->update($_POST);
    }
    catch(Exception $e){
        echo "deu erro no update";
    };
}
else if(isset($_POST["delete"])){
    try{
        $diretor->delete($_POST);
    }
    catch(Exception $e){
        echo "deu erro no delete";
    };
}
