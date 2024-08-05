<?php

require_once './ProdutoInterface.php';
require_once './Produto.php';
require_once './ProdutoPerecivel.php';
require_once './Estoque.php';

$produto = new Produto('Sku-001','Nome', 10,'Unidade', 20);
$produtoPerecivel = new ProdutoPerecivel('Sku-002', 'Nome Perecivel', 10, 'Unidade', 10, '10-10-10');

echo $produtoPerecivel->getNome();