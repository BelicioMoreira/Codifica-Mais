<?php

namespace Itens;

use Itens\ProdutoInterface;

class ProdutoPerecivel extends Produto implements ProdutoInterface
{
    private $dataValidade;

    public function __construct(int $codigo, string $sku, string $nome, int $quantidade, string $unidadeMedida, float $preco, string $dataValidade)
    {
        parent::__construct($codigo, $sku, $nome, $quantidade, $unidadeMedida, $preco);
        $this->dataValidade = $dataValidade;
    }
    
    public function getDataValidade(): string
    {
        return $this->dataValidade;
    }
}