<?php

require_once './FuncionarioBase.php';

class FuncionarioHorista extends FuncionarioBase
{
    protected $horasTrabalhadas;
    protected $taxaPorHora;
    protected $salarioBase = 0;

    public function __construct(string $nome, float $salarioBase, float $horasTrabalhadas, float $taxaPorHora)
    {
        parent::__construct($nome, $salarioBase);
        $this->horasTrabalhadas = $horasTrabalhadas;
        $this->taxaPorHora = $taxaPorHora;
    }
    public function calcularSalario(): float
    {
        return $this->salarioBase = $this->horasTrabalhadas * $this->taxaPorHora;
    }
    public function exibirInformacoes(): string
    {
        return "Nome: $this->nome, Salário: " . $this->calcularSalario();
    }
}