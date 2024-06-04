<?php 

    for ($i = 0; $i < 5; $i++){
        echo "Digite o " . $i + 1 ."º valor: ";
        $array[$i] = (int)trim(fgets(STDIN));
    }

    echo "Este array invertivo fica assim: ";
    
    for ($i = 4; $i >= 0; $i--){
        echo $array[$i] . " ";
    }

?>