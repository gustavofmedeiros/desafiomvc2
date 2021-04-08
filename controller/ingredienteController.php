<?php



require_once "Model/cozinha.php";
require_once "Model/ingrediente.php";

class IngredienteController {

public function __construct() {



}

public function criarIngrediente (Cozinha $cozinha, $nome, dateTime $dataValidade, $quantidade) {
$ingrediente = new Ingrediente ();
$this -> validarCamposObrigatorios($nome, $dataValidade, $quantidade);
if ($this -> validaQuantidade ($quantidade) == 1) {
return $cozinha;
} else {
$ingrediente -> setNome ($nome);
$ingrediente -> setDataValidade ($dataValidade);
$ingrediente -> setQuantidade ($quantidade);
$cozinha -> setListaIngredientes ($ingrediente);
return $cozinha;
}
}

private function validaQuantidade ($quantidade):int {
$status = 0;
$quantidadeMinima = 0;

if ($quantidade < $quantidadeMinima) {
echo "Erro: Impossível adicionar valor menor que " . $quantidadeMinima . " para quantidade do ingrediente definido <br />";
return $status = 1;
}
return $status;
}


private function validarCamposObrigatorios($nome, dateTime $dataValidade, $quantidade):void {

if (empty($nome) || empty($dataValidade) || empty ($quantidade)) {




            throw new Exception("faltam parâmetros para a criação de ingrediente");
}
}

}
