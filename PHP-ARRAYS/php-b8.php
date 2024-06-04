<?php 

    $itens = [];
    $preco = [];    
    $i = 0;
    $maiorPreco = 0;
    $maiorIten = 0;

    function calculoCustos ($valorItens, $part)
    {
        $valorItens = array_sum($valorItens);
        $custo = $valorItens / $part;
        echo "O custo para cada pessoa foi: R$" . $custo;
        if ($part <= 1 ){
            echo "O churrasco foi cancelado, todo mundo furou!";
        }
    }

    echo "Digite o número de itens que churrasco vai ter: ";
    $numItens = (int)trim(fgets(STDIN));

    while ($numItens != 0){
        echo "Digite o " . ($i + 1) . "º iten do churrasco: ";
        $itens[$i++] = trim(fgets(STDIN));
        $numItens--;
    }

    foreach ($itens as $i){
        echo "Digite o preço do " . $i . ": ";
        $preco[$i] = trim(fgets(STDIN));
        if ($preco[$i] >$maiorPreco) {
            $maiorPreco = $preco[$i];
            $maiorIten = $i;
        }        
    }

    echo "Qual o núemro total de participantes: ";
    $part = (int)trim(fgets(STDIN));

    calculoCustos($preco, $part) . PHP_EOL;
    echo " eo item mais caro foi $maiorIten com o valor de R$" . $maiorPreco;
    // echo var_dump($itens);
    // echo var_dump($preco);
    // echo var_dump($maiorPreco);
    // echo var_dump($maiorIten);

?>