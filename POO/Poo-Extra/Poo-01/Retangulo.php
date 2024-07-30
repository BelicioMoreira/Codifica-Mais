<?php

require_once './Forma.php';

class Retangulo extends Forma
{
    private $base;
    private $altura;

    public function __construct(float $base, float $altura) 
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function calcularArea(): float
    {
        return $this->base * $this->altura;
    }
}