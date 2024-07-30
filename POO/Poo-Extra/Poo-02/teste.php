<?php

require_once './Gato.php';
require_once './Cachorro.php';

$umAnimal = new Gato('Gato');
$outroAnimal = new Cachorro('Cachorro');
echo $umAnimal->fazerAnimalEmitirSom($umAnimal) . "\n";
echo $outroAnimal->fazerAnimalEmitirSom($outroAnimal);




