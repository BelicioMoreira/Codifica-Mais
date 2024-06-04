<?php 

    $soma = 0;

    for ($i = 0; $i < 5; $i++){
        echo "Digite o " . $i + 1 ."º valor: ";
        $array[$i] = (int)trim(fgets(STDIN));
    }

    for ($i = 0; $i < 5; $i++){
        if ($array[$i] % 2 == 0) {
            $soma = $soma + $array[$i];
        }
    }

    echo "A soma dos pares foi: $soma.";

?>