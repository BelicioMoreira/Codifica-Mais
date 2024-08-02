<?php

interface ProdutoInterface
{
    public function getSKU(): string;
    public function getNome(): string;
    public function getQuantidade(): int;
    public function getUnidadeMedida(): string;
    public function getPreco(): float;
}