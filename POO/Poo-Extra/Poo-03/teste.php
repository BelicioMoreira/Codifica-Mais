<?php

require_once './FuncionarioHorista.php';
require_once './FuncionarioMensalista.php';

$funcionarioHorista = new FuncionarioHorista('String', 123, 123);
$funcionarioMensalista = new FuncionarioMensalista();

var_dump($funcionarioHorista->calcularSalario());
//var_dump($funcionarioMensalista);