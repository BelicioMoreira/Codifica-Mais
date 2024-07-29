<?php

class Carros 
{
    private $marca;
    private $modelo;
    private $ano;

    public function __construct($marca, $modelo, $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    public function acelerar()
    {
        return "O carro está acelerando.\n";
    }

    public function frear()
    {
        return "O carro está freando.\n"; 
    }
}