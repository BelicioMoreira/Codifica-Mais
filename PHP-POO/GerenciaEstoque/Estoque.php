<?php

class Estoque
{
    public function adicionarProduto(Produto $produto, array $estoque, int $codigo, string $nome, string $tamanho, string $cor, string $quantidade)
    {
        $estoque[] = [
            'codigo' => $codigo,
            'nome' => $nome,
            'tamanho' => $tamanho,
            'cor' => $cor,
            'quantidade' => $quantidade
        ];
    }
}