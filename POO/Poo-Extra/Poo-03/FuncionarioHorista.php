<?php

require_once './FuncionarioBase.php';

class FuncionarioHorista extends FuncionarioBase
{
    protected $horasTrabalhadas;
    
    public function __construct(string $nome, float $salarioBase, float $horasTrabalhadas)
    {
        parent::__construct($nome, $salarioBase);
        $this->horasTrabalhadas = $horasTrabalhadas;
    }
}