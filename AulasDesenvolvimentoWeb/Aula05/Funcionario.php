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

function getRe($re){
    return $this -> re;
}

function setRe(){
    $this ->re;
}

function getNome($nome){
    return $this -> nome;
}

function setNome(){
    $this -> nome;
}

function getDataNasc($dataNasc){
    return $this -> $dataNasc;
}
function setDataNasc(){
    $this -> dataNasc;
}
function getSalario($salario){
    return $this->salario;
}
function setSalario(){
    $this -> salario;
}

}

?>