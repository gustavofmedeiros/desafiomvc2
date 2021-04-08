<?php
class Funcionario {
private $nomeFuncionario;
private $cargo;
private $cargaHoraria;
private $salario;

function __construct () {

}

function getNomeFuncionario () {
return $this -> nomeFuncionario;
}

function setNomeFuncionario ($nome) {
$this -> nomeFuncionario = $nome;
}

function getCargo () {
return $this -> cargo;
}

function setCargo ($cargo) {
$this -> cargo = $cargo;
}

function getCargaHoraria () {
return $this -> cargaHoraria;
}

function setCargaHoraria ($cargaHoraria) {
$this -> cargaHoraria = $cargaHoraria;
}

function getSalario () {
return $this -> salario;
}

function setSalario ($salario) {
$this -> salario = $salario;
}

}

?>
