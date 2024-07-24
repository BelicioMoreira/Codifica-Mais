<?php

require_once 'Produto.php';

$produto = new Produto('Arroz', 100.3, 5);

$produto->alterarPreco(100);
$produto->ajustarEstoque(10);

$produto->exibirDetalhes();