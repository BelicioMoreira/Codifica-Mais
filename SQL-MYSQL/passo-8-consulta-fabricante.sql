SELECT *
FROM produtos 
LEFT JOIN fabricantes ON produtos.id = fabricantes.nome_fabricante;