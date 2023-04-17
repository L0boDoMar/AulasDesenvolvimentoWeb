<?php

class Funcionario{

    private $re;
    private $nome;
    private $dataNasc;
    private $salario;

function __construct($re, $nome,$dataNasc, $salario){
$this->re =$re;
$this->nome =$nome;
$this->dataNasc =$dataNasc;
$this->salario =$salario;

}

function getRe(){
    return $this -> re;
}

function setRe($re){
    $this ->re;
}

function getNome(){
    return $this -> nome;
}

function setNome($nome){
    $this -> nome;
}

function getDataNasc(){
    return $this-> dataNasc;
}
function setDataNasc($dataNasc){
    $this -> dataNasc;
}
function getSalario(){
    return $this->salario;
}
function setSalario($salario){
    $this -> salario;
}

}

?>