INSERT INTO categorias (nome_categoria, deleted_at, created_at, updated_at)
VALUES
('Roupas', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Eletronicos', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Papelaria', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Alimentos', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO fabricantes (nome_fabricante, deleted_at, created_at, updated_at)
VALUES
('Fabricante Eletronicos', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fabricante Vestuário', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fabricante Papelaria', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fabricante Alimentos', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO fornecedores (nome_fornecedor, deleted_at, created_at, updated_at)
VALUES
('Fornecedor Alimentos', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fornecedor Papelaria', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fornecedor Eletronicos', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Fornecedor Vestuario', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

INSERT INTO unidades_medida (nome_unidade_medida, deleted_at, created_at, updated_at)
VALUES
('Unidades', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Gramas', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Litros', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('P', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('M', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('40', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP),
('Kilogramas', NULL, CURRENT_TIMESTAMP, CURRENT_TIMESTAMP);

SELECT * FROM categorias;
SELECT * FROM unidades_medida;
SELECT * FROM fabricantes;
SELECT * FROM fornecedores;