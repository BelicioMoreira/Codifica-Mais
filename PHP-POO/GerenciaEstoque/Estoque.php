<?php

class Estoque
{
    private $estoque = [];

    public function adicionarProduto(Produto $produto)
    {
        $this->estoque[] = $produto;
        echo "Produto adicionado";
        var_dump($this->estoque);

        echo $this->estoque[0]->getNome();
    }

    public function listarEstoque()
    {
        if (empty($this->estoque)) {
            echo "Estoque vazio.";
            return;
        } 
        
        foreach ($this->estoque as $produto) {
            echo "SKU: {$produto->getSKU()} Nome: {$produto->getNome()} Quantidade: {$produto->getQuantidade()} Unidade de Medida: {$produto->getUnidadeMedida()} Preço: {$produto->getPreco()} \n";
            echo "-------------------------------------------------------------------------\n";
        }
    }

    public function venderProduto()
    {
        $skuProcura = readline("Digite o SKU do produto: ");

        foreach ($this->estoque as $produto) {

            if ($produto->getSKU() === $skuProcura) {
            
            $quantidadeVenda = readline("Digite a quantidade para venda: ");

            if ($quantidadeVenda > $produto->getQuantidade()) {
                echo "-------------------------------------------------------------------------\n";
                echo "Existem apenas {$produto->getQuantidade()} deste produto\n";
                echo "-------------------------------------------------------------------------\n";
            } else {
                echo "-------------------------------------------------------------------------\n";
                echo "Foi vendido $quantidadeVenda unidades do produto {$produto->getNome()}.\n";
                echo "-------------------------------------------------------------------------\n";
            }
            }
        }
    }
}