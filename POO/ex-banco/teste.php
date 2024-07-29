<?php

require_once 'ContaBancaria.php';

$conta1 = new ContaBancaria('123-456-789-0', 'Vinicius Cesar');

echo $conta1->sacar(70) . "\n";
echo $conta1->depositar(100) . "\n";
echo $conta1->sacar(70) . "\n";

echo $conta1->exibeSaldo();