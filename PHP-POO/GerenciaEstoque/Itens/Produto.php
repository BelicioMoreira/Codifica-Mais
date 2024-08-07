<?php

namespace Itens;

use Itens\ProdutoInterface;

class Produto implements ProdutoInterface
{
    private $codigo, $sku, $nome, $quantidade, $unidadeMedida, $preco;

    public function __construct(int $codigo, string $sku, string $nome, int $quantidade, string $unidadeMedida, float $preco)
    {
        $this->codigo = $codigo;
        $this->sku = $sku;
        $this->nome = $nome;
        $this->quantidade = $quantidade;
        $this->unidadeMedida = $unidadeMedida;
        $this->preco = $preco;
    }
    public function getCodigo(): int
    {
        return $this->codigo;
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
    
    public function vendaProduto($quantidade): int
    {
        return $this->quantidade -= $quantidade;
    }
}