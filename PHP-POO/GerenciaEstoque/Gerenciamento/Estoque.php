<?php

namespace Gerenciamento;

use Itens\Produto;
use Itens\ProdutoPerecivel;

class Estoque
{
    private $estoque = [];

    public function adicionarProduto(): void
    {
        $codigo = readline("Digite o Código do produto: ");
        $sku = readline("Digite o SKU do produto: ");
        $nome = readline("Digite o Nome do produto: ");
        $quantidade = readline("Digite a Quantidade: ");
        $unidadeMedida = readline("Digite a Unidade de medida: ");
        $preco = readline("Digite o Preço do produto: ");
        $produto = new Produto($codigo, $sku, $nome, $quantidade, $unidadeMedida, $preco);
        $this->estoque[] = $produto;
        echo "--------------------------\n";
        echo "Produto adicionado.\n";
        echo "--------------------------\n";
    }

    public function adicionarProdutoPerecivel(): void
    {
        $codigo = readline("Digite o Código do produto: ");
        $sku = readline("Digite o SKU do produto: ");
        $nome = readline("Digite o Nome do produto: ");
        $quantidade = readline("Digite a Quantidade: ");
        $unidadeMedida = readline("Digite a Unidade de medida: ");
        $preco = readline("Digite o Preço do produto: ");
        $dataValidade = readline("Digite a Data de Validade(dd/mm/aaaa): ");
        $produto = new ProdutoPerecivel($codigo, $sku, $nome, $quantidade, $unidadeMedida, $preco, $dataValidade);
        $this->estoque[] = $produto;
        echo "--------------------------\n";
        echo "Produto adicionado.\n";
        echo "--------------------------\n";
    }

    public function venderProduto(): void
    {
        $codigoProcura = readline("Digite o código do produto: ");

        foreach ($this->estoque as $produto) {

            if ($produto->getCodigo() == $codigoProcura) {
            
                $quantidadeVenda = readline("Digite a quantidade para venda: ");

                if ($quantidadeVenda > $produto->getQuantidade()) {
                    echo "-------------------------------------------------------------------------\n";
                    echo "Existem apenas {$produto->getQuantidade()} deste produto\n";
                    echo "-------------------------------------------------------------------------\n";
                } else {
                    $produto->vendaProduto($quantidadeVenda);
                    echo "-------------------------------------------------------------------------\n";
                    echo "Foi vendido $quantidadeVenda unidades do produto {$produto->getNome()}.\n";
                    echo "-------------------------------------------------------------------------\n";
                }

                if ($produto->getQuantidade() == 0) {
                    unset($this->estoque);
                    echo "-------------------------------------------------------------------------\n";
                    echo "O produto  {$produto->getNome()} foi removido, pois acabou o estoque. ". "\n";
                    echo "-------------------------------------------------------------------------\n";
                }
            }
        }

        echo "-------------------------------------------------------------------------\n";                
        echo "Produto não encontrado.\n";                
        echo "-------------------------------------------------------------------------\n";   
    }

    public function verificarEstoque(): void
    {
        $codigoProcura = readline("Digite o código do produto: ");

        foreach ($this->estoque as $produto) {
            if ($produto->getCodigo() == $codigoProcura) {
                echo "-------------------------------------------------------------------------\n";
                echo "O produto {$produto->getNome()} está disponivel com {$produto->getQuantidade()} unidades\n";
                echo "-------------------------------------------------------------------------\n";
                return;
            }
        }

        echo "-------------------------------------------------------------------------\n";                
        echo "Produto não encontrado.\n";                
        echo "-------------------------------------------------------------------------\n";   
    }

    public function listarEstoque(): void
    {
        if (empty($this->estoque)) {
            echo "Estoque vazio.\n";
            echo "-------------------------------------------------------------------------\n";
            return;
        } 
        
        foreach ($this->estoque as $produto) {
            echo "Código: {$produto->getCodigo()} SKU: {$produto->getSKU()} Nome: {$produto->getNome()} Quantidade: {$produto->getQuantidade()} Unidade de Medida: {$produto->getUnidadeMedida()} Preço: {$produto->getPreco()} \n";
            echo "-------------------------------------------------------------------------\n";
        }
    }
}