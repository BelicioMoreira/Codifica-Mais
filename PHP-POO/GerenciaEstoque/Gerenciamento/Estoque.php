<?php

namespace Gerenciamento;

use Itens\Produto;
use Itens\ProdutoPerecivel;
class Estoque
{
    private $estoque = [];

    public function __construct()
    {
        $this->estoque[] = new Produto(101, 'NIK-AM-MAS-PR-42', 'Tênis Nike Air Max Masculino Preto Tamanho 42', 20, 'Unidade', 350.00);
        $this->estoque[] = new Produto(102, 'CAD-ERG-AZ-UN', 'Cadeira de Escritório Ergônomica Azul', 15, 'Unidade', 450.00);
        
        $this->estoque[] = new ProdutoPerecivel(201, 'FRU-MAC-VER-UNI', 'Maçã Verde Unidade', 200, 'Unidade', 1.50, '10/09/2024');
        $this->estoque[] = new ProdutoPerecivel(202, 'LAC-LEI-1L', 'Leite Integral 1 Litro', 150, 'Litro', 3.50, '15/09/2024');
    }

    public function adicionarProduto(): void
    {
        $codigo = readline("Digite o Código do produto: ");
        $sku = readline("Digite o SKU do produto: ");
        $nome = readline("Digite o Nome do produto: ");
        $quantidade = readline("Digite a Quantidade: ");
        $unidadeMedida = readline("Digite a Unidade de medida: ");
        $preco = readline("Digite o Preço do produto: R$ ");
        $produto = new Produto($codigo, $sku, $nome, $quantidade, $unidadeMedida, $preco);
        $this->estoque[] = $produto;
        echo "-----------------------------------------\n";
        echo "          Produto adicionado.\n";
        echo "-----------------------------------------\n";
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
        echo "-----------------------------------------\n";
        echo "          Produto adicionado.\n";
        echo "-----------------------------------------\n";
    }

    public function venderProduto(): void
    {
        $codigoProcura = readline("Digite o código do produto: ");

        foreach ($this->estoque as $item => $produto) {

            if ($produto->getCodigo() == $codigoProcura) {
            
                $quantidadeVenda = readline("Digite a quantidade para venda: ");

                if ($quantidadeVenda > $produto->getQuantidade()) {
                    echo "-----------------------------------------\n";
                    echo "Existem apenas {$produto->getQuantidade()} deste produto\n";
                    echo "-----------------------------------------\n";

                } else {
                    $produto->vendaProduto($quantidadeVenda);
                    echo "-----------------------------------------\n";
                    echo "Foi vendido $quantidadeVenda unidades do produto: \n{$produto->getNome()}.\n";
                    echo "-----------------------------------------\n";

                    if ($produto->getQuantidade() == 0) {
                        unset($this->estoque[$item]);
                        echo "-----------------------------------------\n";
                        echo "O produto {$produto->getNome()} foi removido, pois acabou o estoque. ". "\n";
                        echo "-----------------------------------------\n";
                    }
                    return;
                }
            }
        }

        echo "-----------------------------------------\n";                
        echo "          Produto não encontrado.\n";                
        echo "-----------------------------------------\n";   
    }

    public function verificarEstoque(): void
    {
        $codigoProcura = readline("Digite o código do produto: ");

        foreach ($this->estoque as $produto) {
            if ($produto->getCodigo() == $codigoProcura) {
                echo "-----------------------------------------\n";
                echo "Produto: \n{$produto->getNome()} \nestá disponivel com {$produto->getQuantidade()} unidades\n";
                echo "-----------------------------------------\n";
                return;
            }
        }

        echo "-----------------------------------------\n";                
        echo "          Produto não encontrado.\n";                
        echo "-----------------------------------------\n";  
    }

    public function listarEstoque(): void
    {
        if (empty($this->estoque)) {
            echo "            Estoque vazio.\n";
            echo "-----------------------------------------\n";
            return;
        } 
        
        foreach ($this->estoque as $produto) {
            echo "Código: {$produto->getCodigo()} \nSKU: {$produto->getSKU()} \nNome: {$produto->getNome()} \nQuantidade: {$produto->getQuantidade()} \nUnidade de Medida: {$produto->getUnidadeMedida()} \nPreço: {$produto->getPreco()} \n";
            echo "-----------------------------------------\n";
        }
    }
}