<?php 

    function aplicarDesconto($valorCompra, $percentualDesconto)
    {
        $percentualDesconto = calcularDescontoProgressivo($valorCompra);
        $valorFinal = $valorCompra -($valorCompra * $percentualDesconto / 100);
        return $valorFinal;
    }

    function calcularDescontoProgressivo($valorCompra)
    {
        if ($valorCompra < 100){
            $percentualDesconto = 0;
        } elseif ($valorCompra >= 100 && $valorCompra <= 500){
            $percentualDesconto = 10;
        } elseif ($valorCompra > 500){
            $percentualDesconto = 20;
        }

        return $percentualDesconto;
    }

    echo "Qual o valor da compra: ";
    $valorCompra = trim(fgets(STDIN));    
    
    echo "O valor final da compra com desconto foi: R$" . aplicarDesconto($valorCompra, calcularDescontoProgressivo($valorCompra));

?>