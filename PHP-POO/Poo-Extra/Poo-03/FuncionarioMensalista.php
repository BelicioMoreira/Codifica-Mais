<?php

require_once './FuncionarioBase.php';

class FuncionarioMensalista extends FuncionarioBase
{
    public function __construct(string $nome, float $salarioBase)
    {
        parent::__construct($nome, $salarioBase);
    }
    public function exibirInformacoes(): string
    {
        return "Nome: $this->nome, Salário: $this->salarioBase";
    }
}