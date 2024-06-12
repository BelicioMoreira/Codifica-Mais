<?php 

    function calcDescot($valorProduto, $porcetagemDesc)
    {
        $valorFinal = $valorProduto - ($valorProduto * ($porcetagemDesc / 100));
        return $valorFinal;
    }

    echo "Digite o valor do produto: ";
    $valorProduto = trim(fgets(STDIN));
    echo "Digite o valor do desconto em porcentagem: ";
    $porcetagemDesc = trim(fgets(STDIN));

    echo "O valor final do produto é R$ " . calcDescot($valorProduto, $porcetagemDesc);

?>