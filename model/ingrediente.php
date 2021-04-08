<?php
class Ingrediente {

private $nome;
private $dataValidade;


function __construct () {

}

function getNome () {
return $this -> nome;
}

function setNome ($nome) {
$this -> nome = $nome;
}

function getDataValidade ():dateTime {
return $this -> dataValidade;
}

function setDataValidade (dateTime $validade) {
$this -> dataValidade = $validade;
}

function getQuantidade () {
return $this -> quantidade;
}

function setQuantidade ($quantidade) {
$this -> quantidade = $quantidade;
}


}

?>
