<?php

class Funcionarios
{
    private $nome;
    private $cargo;
    private $salario;

    public function __construct(string $nome, string $cargo, float $salario)
    {
        $this->nome = $nome;
        $this->cargo = $cargo;
        $this->salario = $salario;
    }

    public function ajustarSalario(float $novoSalario): float
    {
        return $this->salario = $novoSalario;
    }

    public function alterarCargo(string $novoCargo): string
    {
        return $this->cargo = $novoCargo;
    }

    public function exibirDetalhes(): void
    {
        echo "Nome: " . $this->nome . "\n";
        echo "Cargo: " . $this->cargo . "\n";
        echo "Salário: " . $this->salario . "\n";
    }

}