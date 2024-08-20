<?php

require_once './FuncionarioHorista.php';
require_once './FuncionarioMensalista.php';

$funcionarioHorista = new FuncionarioHorista('Funcionario Horista', 0, 220 ,10);
$funcionarioMensalista = new FuncionarioMensalista('Funcionario Mensalista', 2000);

echo $funcionarioHorista->exibirInformacoes() . "\n";
echo $funcionarioMensalista->exibirInformacoes() . "\n";