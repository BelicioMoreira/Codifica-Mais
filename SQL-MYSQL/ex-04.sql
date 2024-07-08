USE gestao_produtos;

ALTER TABLE produtos 
DROP categoria,
DROP unidade_medida,
DROP fabricante, 
DROP fornecedor;

ALTER TABLE produtos
ADD COLUMN categoria BIGINT,
ADD CONSTRAINT fk_categoria FOREIGN KEY (categoria) REFERENCES categoria(id);

ALTER TABLE produtos
ADD COLUMN unidade_medida BIGINT,
ADD CONSTRAINT fk_unidades_medida FOREIGN KEY (unidade_medida) REFERENCES unidades_medida(id);

ALTER TABLE produtos
ADD COLUMN fabricante BIGINT,
ADD CONSTRAINT fk_fabricante FOREIGN KEY (fabricante) REFERENCES fabricantes(id);

ALTER TABLE produtos
ADD COLUMN fornecedor BIGINT,
ADD CONSTRAINT fk_fornecedor FOREIGN KEY (fornecedor) REFERENCES fornecedores(id);