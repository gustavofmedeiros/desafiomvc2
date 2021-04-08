<!doctype html>
<html lang="pt-br">
        <head>
<title>Cozinha</title>
</head>
<body>

<?php


require 'controller/cozinhaController.php';
require 'controller/FuncionarioController.php';
require 'controller/ingredienteController.php';









try {
$cozinhaController = new cozinhaController();
$primeiraCozinha = $cozinhaController -> criarCozinha (
"gaúcha",
12,
23,
"churrasco"
);


} catch (Exception $e) {
    echo $e->getMessage();
}

try {
$funcionarioController = new FuncionarioController ();
$primeiraCozinha = $funcionarioController -> criarFuncionario (
$primeiraCozinha,
"Gustavo",
"cozinheiro",
8,
900
);
if (!empty ($primeiraCozinha -> getListaFuncionarios())) {
$funcionarios = $primeiraCozinha -> getListaFuncionarios();

}

} catch (Exception $e) {
echo $e -> getMessage ();
}

try {
$ingredienteController = new IngredienteController ();
$primeiraCozinha = $ingredienteController -> criarIngrediente (
$primeiraCozinha,
"carne",
new DateTime ("2021-01-01"),
-2
);
$ingredientes = $primeiraCozinha -> getListaIngredientes ();

} catch (Exception $e) {
echo $e -> getMessage ();

}


echo "Cozinha: " . $primeiraCozinha -> getTipoCozinha () . "<br/>";
echo "Hora de abertura: " . $primeiraCozinha -> getHorarioAbertura () . "<br />";
echo "Hora de fechamento: " . $primeiraCozinha -> getHorarioFechamento () . "<br />";
echo "Prato principal: " . $primeiraCozinha -> getPratoPrincipal () . "<br />";
echo "Lista de funcionários da cozinha " . $primeiraCozinha -> getTipoCozinha () . ":<br />";
if (empty ($funcionarios)) {
echo "Não existem funcionários cadastrados. <br />";
} else {
foreach ($funcionarios as $funcionario) {
echo "Nome: " . $funcionario -> getNomeFuncionario () . "<br />";
echo "Cargo: " . $funcionario -> getCargo() . "<br />";
echo "Carga horária: " . $funcionario -> getCargaHoraria () . "<br />";
echo "Salário: " . $funcionario -> getSalario () . "<br />";
}
}

echo "Lista de ingredientes da cozinha: <br />";

foreach ($ingredientes as $ingrediente) {
echo "Ingrediente: " . $ingrediente -> getNome () . "<br />";
echo "Data de validade: " . $ingrediente -> getDataValidade () -> format ("d-m-y") . "<br />";
echo "Quantidade: " . $ingrediente -> getQuantidade() . "<br/>";
}

?>


</body>
</html>
