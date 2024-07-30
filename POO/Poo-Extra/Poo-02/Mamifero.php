<?php

require_once './Animal.php';

class Mamifero implements Animal
{
    protected $nome;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
    }
    public function fazerSom(Animal $animal): string
    {
        return "Animal fazendo um som";
    }
}