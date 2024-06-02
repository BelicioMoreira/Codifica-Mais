<?php

    for ($i = 0; $i < 7; $i++){
        echo "Digite o " . $i + 1 ."º valor: ";
        $array[$i] = (int)trim(fgets(STDIN));
    }

    echo "Digite um número para verificar se ele esta presente neste array: ";
    $num = (int)trim(fgets(STDIN));
    $posicao = array_search($num, $array,);

    if ($posicao !== false){
        echo "O número $num está presente no array, na posição " . ($posicao + 1);
    } else {
        echo "O número $num não está presente no array."; 
    }

?>