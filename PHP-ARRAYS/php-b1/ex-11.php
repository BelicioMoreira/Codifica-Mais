<?php 

    for ($i = 0; $i < 6; $i++){
        echo "Digite o " . $i + 1 ."º valor: ";
        $array[$i] = (int)trim(fgets(STDIN));
    }

    echo "O dobro de cada elemento do array é: ";

    for ($i = 0; $i < 6; $i++){
        echo $array[$i] * 2 . " ";
    }

?>