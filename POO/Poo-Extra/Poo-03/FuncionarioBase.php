<?php

require_once './Funcionario.php';

class FuncionarioBase implements Funcionario
{
    protected $nome;
    protected $salarioBase;

    public function __construct(string $nome, float $salarioBase)
    {
        $this->nome = $nome;
        $this->salarioBase = $salarioBase;
    }
    public function calcularSalario(): float
    {
        return $this->salarioBase;
    }
    public function exibirInformacoes(): string
    {
        return $this->nome;
    }
}