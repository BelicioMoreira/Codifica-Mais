<?php 

    function calculoIMC($peso, $altura)
    {
        $imc = $peso / ($altura * $altura);
        if ($imc < 18.5){
            echo "A classificaçao do seu imc é: Magreza";
        } elseif ($imc > 18.5 && $imc < 24.9){
            echo "A classificaçao do seu imc é: Normal";
        } elseif ($imc > 25 && $imc < 29.9){
            echo "A classificaçao do seu imc é: Sobrepeso";
        } elseif ($imc > 30 && $imc < 34.9){
            echo "A classificaçao do seu imc é: Obesidade grau I";
        } elseif ($imc > 35 && $imc < 39.9){
            echo "A classificaçao do seu imc é: Obesidade grau II";
        } elseif ($imc > 40){
            echo "A classificaçao do seu imc é: Obesidade grau III";
        }
    }

    echo "Qual o seu peso (em quilogramas): ";
    $peso = trim(fgets(STDIN));
    echo "Qual sua altura (em metros): ";
    $altura = trim(fgets(STDIN));

    echo calculoIMC($peso, $altura);

?>