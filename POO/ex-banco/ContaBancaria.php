<?php

class ContaBancaria
{
    private $numeroConta;
    private $nomeTitular;
    private $saldo;


    public function __construct(string $numeroConta, string $nomeTitular)
    {
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
        $this->saldo = 0;
    }

    public function depositar(float $quantia): void
    {
        if ($quantia <= 0) {
            echo "O valor precisa ser positivo";
            return;
        }
        
        $this->saldo += $quantia;
    }
    
    public function sacar(float $quantia): void
    {
        if ($this->saldo < $quantia) {
            echo "Saldo insuficiente";
            return;     
        }

        $this->saldo -= $quantia;
    }

    public function exibeSaldo(): float
    {
        echo "O saldo atual é = ";
        return $this->saldo;

    }
}