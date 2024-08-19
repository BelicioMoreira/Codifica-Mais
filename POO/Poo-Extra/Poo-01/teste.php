<?php

require_once './Retangulo.php';
require_once './Circulo.php';

$retangulo = new Retangulo(10, 5);
$circulo = new Circulo(5);

echo "Área do retangulo = " . $retangulo->calcularArea() . PHP_EOL;
echo "Área do circulo = " . $circulo->calcularArea();