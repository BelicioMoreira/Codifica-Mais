<?php

namespace POO\Veiculo\src;

abstract class Veiculo implements VeiculoInterface
{
    protected $marca;
    protected $modelo;
    protected $ano;

    public function __construct(string $marca, string $modelo, int $ano)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->ano = $ano;
    }

    abstract public function acelerar();
    abstract public function frear();
}