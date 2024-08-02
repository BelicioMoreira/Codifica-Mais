<?php

require_once 'Funcionario.php';

$funcionario = new Funcionario('Nome', 'Cargo', 1400);

$funcionario->alterarCargo('Novo Cargo');
$funcionario->ajustarSalario(2300);

$funcionario->exibirDetalhes();

