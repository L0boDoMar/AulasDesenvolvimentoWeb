<?php

include_once "Funcionario.php";
include_once "conexao.php";

class FuncionarioDao{

function inserir($funcionario){

    global $conn;

    $sql = $conn-> prepare ("INSERT INTO FUNCIONARIOS VALUES (?,?,?,?)");
    $sql-> bind_param("issd",$p1,$p2,$p3,$p4);
    $p1 = $funcionario-> getRe(); 
    $p2 = $funcionario-> getNome(); 
    $p3 = $funcionario-> getDataNasc(); 
    $p4 = $funcionario-> getSalario(); 
    $sql->execute();
    if($sql->affected_rows>0){
        return true;
    }
}

function excluir($funcionario){
    global $conn;
    $sql = $conn-> prepare ("DELETE FROM FUNCIONARIOS WHERE RE=?");
    $sql-> bind_param("i",$p1);
    $p1 = $funcionario-> getRe(); 
    $sql->execute();
    if($sql->affected_rows>0){
        return true;
    }

}

function alter($funcionario){


}

function listar(){

}

function buscarPeloRe($re){

}

}


?>