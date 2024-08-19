<?php

namespace Projeto\Veiculos\Modelo;

use Projeto\Veiculos\Veiculo;

class Caminhao extends Veiculo
{
    public function acelerar(): string
    {
        return "Caminhao esta acelerando";
    }    
    public function frear(): string
    {
        return "Caminhão esta freando";
    }
    public function exibirDetalhes(): string
    {
        return  "Marca: $this->marca, Modelo: $this->modelo, Ano: $this->ano";
    }    
}