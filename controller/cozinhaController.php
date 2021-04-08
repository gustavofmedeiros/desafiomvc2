<?php



require_once "Model/cozinha.php";
require_once "Model/funcionario.php";
require_once "Model/ingrediente.php";


class CozinhaController {

public function __construct() {



}

public function criarCozinha ($tipo, $horarioAbertura, $horarioFechamento, $pratoPrincipal) {
$this->validarCamposObrigatorios($tipo, $horarioAbertura, $horarioFechamento, $pratoPrincipal);



$cozinha = new Cozinha();
$cozinha->setTipoCozinha($tipo);

$cozinha->setHorarioAbertura($horarioAbertura);
        $cozinha->setHorarioFechamento($horarioFechamento);
$cozinha->setPratoPrincipal($pratoPrincipal);

return $cozinha;
    }


private function validarCamposObrigatorios($tipo, $horarioAbertura, $horarioFechamento, $pratoPrincipal):void {

if (empty($tipo)
|| empty($horarioAbertura)
|| empty($horarioFechamento)
|| empty($pratoPrincipal)) {

            throw new Exception("Faltam parâmetros para a criação da cozinha");
}
}

}
