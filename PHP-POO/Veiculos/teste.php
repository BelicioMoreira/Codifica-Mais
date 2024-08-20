<?php

require_once 'autoload.php';

use Projeto\Veiculos\Modelo\Caminhao;
use Projeto\Veiculos\Modelo\Carro;
use Projeto\Veiculos\Modelo\Moto;

$caminhao = new Caminhao('Marca Caminhão', 'Modelo Caminhão', 1990);
$carro = new Carro('Marca Carro', 'Modelo Caroo', 2000);
$moto = new Moto('Marca Moto', 'Modelo Moto', 1995);

echo $moto->acelerar() . PHP_EOL;
echo $caminhao->exibirDetalhes();

