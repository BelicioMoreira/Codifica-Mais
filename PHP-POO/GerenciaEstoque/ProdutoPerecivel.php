<?php

require_once './Produto.php';
require_once './ProdutoInterface.php';

class ProdutoPerecivel extends Produto implements ProdutoInterface
{
    private $dataValidade;

    public function __construct(string $sku, string $nome, int $quantidade, string $unidadeMedida, float $preco, string $dataValidade)
    {
        parent::__construct($sku, $nome, $quantidade, $unidadeMedida, $preco);
        $this->dataValidade = $dataValidade;
    }
    public function getDataValidade(): string
    {
        return $this->dataValidade;
    }
}