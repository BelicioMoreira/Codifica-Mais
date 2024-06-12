<?php

    function converterTEMPCelsius($temperatura)
    {
        $temperatura = ($temperatura - 32) * 5 / 9;
        return $temperatura;
    }

    function converterTEMPFahren($temperatura)
    {
        $temperatura = ($temperatura * 9/5) + 32;
        return $temperatura;
    }

    echo "Digite a temperatura: ";
    $temperatura = trim(fgets(STDIN));
    echo "Digite em qual a unidade de medida está a temperatura: c para Celsius/f para Fahrenheit: ";
    $unidade = trim(fgets(STDIN));

    if ($unidade == 'c'){
        echo"● Temperatura em Fahrenheit: " . converterTEMPFahren($temperatura) . "°F \n";
        echo "● Temperatura em Celsius: " . $temperatura . "°C \n";

    } elseif ($unidade == 'f'){
        echo"● Temperatura em Fahrenheit: " . $temperatura . "°F \n";
        echo "● Temperatura em Celsius: " . converterTEMPCelsius($temperatura) . "°C \n";
    }    

?>