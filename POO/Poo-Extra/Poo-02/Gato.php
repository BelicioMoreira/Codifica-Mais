<?php

require_once './Mamifero.php';

class Gato extends Mamifero
{
    public function fazerSom(Animal $animal): string
    {
        return "Miau";
    }
    public function fazerAnimalEmitirSom(Gato $gato): string
    {
        return $this->fazerSom($gato);
    }   
}