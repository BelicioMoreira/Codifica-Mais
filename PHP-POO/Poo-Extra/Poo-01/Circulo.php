<?php

require_once './Forma.php';

class Circulo extends Forma
{
    private $raio;

    public function __construct(float $raio)
    {   
        $this->raio = $raio;
    }
    public function calcularArea(): float
    {
        return $this->raio ** 2 * 3.14;
    }

}