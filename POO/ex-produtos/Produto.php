<?php

class Produto
{
    private $nome;
    private $preco;
    private $quantidadeEmEstoque;

    public function __construct(string $nome, float $preco, int $quantidadeEmEstoque)
    {
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidadeEmEstoque = $quantidadeEmEstoque;
    }

    public function alterarPreco(float $novoPreco): float 
    {   
        return $this->preco = $novoPreco;    
    }

    public function ajustarEstoque(int $quantidade): int 
    {   
        return $this->quantidadeEmEstoque = $quantidade;    
    }

    public function exibirDetalhes(): void
    {
        echo "Nome: " . $this->nome . "\n";
        echo "Preco: " . $this->preco . "\n";
        echo "Quantidade: " . $this->quantidadeEmEstoque . "\n";
    }
}