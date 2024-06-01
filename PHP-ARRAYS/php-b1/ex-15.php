<?php

    for ($i = 0; $i < 7; $i++){
        echo "Digite o " . $i + 1 ."º valor: ";
        $array[$i] = (int)trim(fgets(STDIN));
    }

    echo "Digite um número para verificar se ele esta presente neste array: ";
    $num = (int)trim(fgets(STDIN));

    if (array_search($num, $array, true)){
        echo "O número $num está presente no array.";
    } else {
        echo "O número $num não está presente no array."; 
    }

?>