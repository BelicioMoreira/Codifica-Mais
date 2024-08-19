<?php

namespace Projeto\Veiculos;
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
    public function acelerar(): string
    {
        return "Veiculo esta acelerando";
    }
    public function frear(): string
    {
        return "Veiculo esta freando";
    }
    abstract public function exibirDetalhes(): string;
}