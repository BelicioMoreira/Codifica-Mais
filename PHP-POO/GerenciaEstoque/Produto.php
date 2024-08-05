<?php

require_once './ProdutoInterface.php';

class Produto implements ProdutoInterface
{
    private $sku, $nome, $quantidade, $unidadeMedida, $preco;

    public function __construct(string $sku, string $nome, int $quantidade, string $unidadeMedida, float $preco)
    {
        $this->sku = $sku;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->unidadeMedida = $unidadeMedida;
        $this->preco = $preco;
    }    
    public function getSKU(): string
    {
        return $this->sku;
    }
    public function getNome(): string
    {
        return $this->nome;
    }
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }
    public function getUnidadeMedida(): string
    {
        return $this->unidadeMedida;
    }
    public function getPreco(): float
    {
        return $this->preco;
    }
}