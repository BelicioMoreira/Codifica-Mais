<?php

require_once './Mamifero.php';

class Cachorro extends Mamifero
{
    public function fazerSom(Animal $animal): string
    {
        return "Latido";
    }
    public function fazerAnimalEmitirSom(Cachorro $cachorro): string
    {
        return $this->fazerSom($cachorro);
    }
}