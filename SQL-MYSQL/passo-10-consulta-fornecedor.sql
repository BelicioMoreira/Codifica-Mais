SELECT produtos.quantide_estoque
FROM produtos
LEFT JOIN fornecedores ON fornecedores.nome_fornecedor = produtos.id;