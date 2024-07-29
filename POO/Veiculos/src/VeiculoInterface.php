<?php
namespace Projeto\Veiculos;
interface VeiculoInterface
{
    public function acelerar(): string;    
    public function frear(): string;
    public function exibirDetalhes(): string;
}