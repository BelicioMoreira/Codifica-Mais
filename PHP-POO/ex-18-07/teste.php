<?php

require_once 'Carros.php';

$carro1 = new Carros('Marca', 'Modelo', 'Ano');

echo $carro1->acelerar();
echo $carro1->frear();