<?php

namespace Projeto\Veiculos\Modelo;

use Projeto\Veiculos\Veiculo;

class Moto extends Veiculo
{
    public function acelerar(): string
    {
        return "A moto esta acelerando";
    }
    public function frear(): string
    {
        return "A moto esta freando";
    }
    public function exibirDetalhes(): string
    {
        return  "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }
}
