<?php

namespace Projeto\Veiculos\Modelo;

use Projeto\Veiculos\Veiculo;

class Carro extends Veiculo
{
    public function acelerar(): string
    {
        return "Carro esta acelerando";
    }
    public function frear(): string
    {
        return "Carro esta freando";
    }
    public function exibirDetalhes(): string
    {
        return  "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }
}