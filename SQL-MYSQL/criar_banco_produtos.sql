CREATE DATABASE gestao_produtos;

USE gestao_produtos;

CREATE TABLE produtos (
    id BIGINT AUTO_INCREMENT, PRIMARY KEY (id),
    nome VARCHAR(255) NOT NULL, 
    sku VARCHAR(255) NOT NULL,
    descricao TEXT NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    preco DECIMAL(10, 2) NOT NULL,
    unidade_medida VARCHAR(255) NOT NULL,
    peso DECIMAL(10, 2) NOT NULL,
    quantide_estoque INT NOT NULL,
    fabricante VARCHAR(255) NOT NULL,
    fornecedor VARCHAR(255) NOT NULL,
    deleted_at DATETIME NOT NULL,
    created_at DATETIME NOT NULL,
    updated_at DATETIME NOT NULL
);