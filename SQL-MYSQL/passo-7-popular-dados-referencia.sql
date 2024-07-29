INSERT INTO produtos (nome, sku, descricao, categoria, preco, unidade_medida, peso, quantide_estoque, fabricante, fornecedor, deleted_at, created_at, updated_at)
VALUES
('Arroz', 'SKU-032', 'Produto Alimentício', 4, 40, 7, 5, 65, 4, 1, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Camisa Polo', 'SKU-054', 'Produto Vestuário', 1, 104.99, 6, 0.200, 23, 2, 4, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Computator de Mesa', 'SKU-212', 'Produto Eletronico', 2, 1111.99, 1, 5, 190, 1, 3, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Tenis', 'SKU-332', 'Produto Vestuário', 1, 230, 6, 0.500, 37, 2, 4, NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

SELECT * FROM produtos;
SELECT * FROM categorias;
SELECT * FROM unidades_medida;
SELECT * FROM fabricantes;
SELECT * FROM fornecedores;