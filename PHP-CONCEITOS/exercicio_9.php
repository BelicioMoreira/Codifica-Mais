<?php
    $numero = 6;

    if ($numero > 0 ) {

        $divisores = 0;
        $contador = 1;
        
        while ($numero > $contador) {
            $contador++;
            if ($numero % $contador == 0) {
                $divisores++;
            } 
        }

        if ($divisores == 1) {
            echo "O número " . $numero . " é primo.";
        } else {
            echo "O número " . $numero . " não é primo.";  
        }

    } 

?>