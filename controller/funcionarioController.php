<?php



require_once "Model/cozinha.php";
require_once "Model/funcionario.php";


class FuncionarioController {

public function __construct() {



}

public function criarFuncionario (Cozinha $cozinha, $nome, $cargo, $cargaHoraria, $salario) {
$funcionario = new Funcionario ();

$this -> validarCamposObrigatorios($nome, $cargo, $cargaHoraria, $salario);
if ($this -> validaSalario ($cargaHoraria, $salario) == 1) {
return $cozinha;
} else {
$funcionario -> setNomeFuncionario ($nome);
$funcionario -> setCargo ($cargo);
$funcionario -> setCargaHoraria ($cargaHoraria);
$funcionario -> setSalario ($salario);

$cozinha -> setListaFuncionarios ($funcionario);
return $cozinha;
}
}


private function validaSalario ($cargaHoraria, $salario):int {
$status = 0;

if ($cargaHoraria > 4 && $salario < 1098) { // se sal�rio for inv�lido para carga hor�ria, retorna 1
echo "Erro: sal�rio estabelecido n�o � compat�vel com carga hor�ria clt <br />";
return $status = 1;
}
return $status;
}

private function validarCamposObrigatorios($nome, $cargo, $cargaHoraria, $salario):void {

if (empty($nome) || empty($cargo) || empty ($cargaHoraria) || empty ($salario)) {
            throw new Exception("faltam par�metros para a cria��o do funcion�rio");



}
}

}
