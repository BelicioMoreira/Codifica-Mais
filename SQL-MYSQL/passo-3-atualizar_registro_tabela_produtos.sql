UPDATE produtos
SET nome = 'Produto 1', sku = 'SKU-001', descricao = 'Produto 1', categoria = 'Categoria-01', preco = 99.99, unidade_medida = 'Unidade de medida', peso = 99.99, quantide_estoque = 99, fabricante = 'Nome fabricante', fornecedor = 'Nome fornecedor', deleted_at = CURRENT_TIMESTAMP, created_at = CURRENT_TIMESTAMP, updated_at = CURRENT_TIMESTAMP
WHERE id = 1;

UPDATE produtos
SET nome = 'Produto 2', sku = 'SKU-002', descricao = 'Produto 2', categoria = 'Categoria-02', preco = 99.99, unidade_medida = 'Unidade de medida', peso = 99.99, quantide_estoque = 99, fabricante = 'Nome fabricante', fornecedor = 'Nome fornecedor', deleted_at = CURRENT_TIMESTAMP, created_at = CURRENT_TIMESTAMP, updated_at = CURRENT_TIMESTAMP
WHERE id = 2;

UPDATE produtos
SET nome = 'Produto 3', sku = 'SKU-003', descricao = 'Produto 3', categoria = 'Categoria-03', preco = 99.99, unidade_medida = 'Unidade de medida', peso = 99.99, quantide_estoque = 99, fabricante = 'Nome fabricante', fornecedor = 'Nome fornecedor', deleted_at = CURRENT_TIMESTAMP, created_at = CURRENT_TIMESTAMP, updated_at = CURRENT_TIMESTAMP
WHERE id = 3;

SELECT * FROM produtos;