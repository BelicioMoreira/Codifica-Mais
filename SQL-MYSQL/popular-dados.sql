INSERT INTO categoria (nome_categoria, deleted_at, created_at, updated_at)
VALUES
('Nome Categoria', NULL, CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());

INSERT INTO unidades_medida (nome_categoria, deleted_at, created_at, updated_at)
VALUES
('Nome Unidades', NULL, CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());

INSERT INTO fabricantes (nome_categoria, deleted_at, created_at, updated_at)
VALUES
('Nome Fabricantes', NULL, CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());

INSERT INTO fornecedores (nome_categoria, deleted_at, created_at, updated_at)
VALUES
('Nome Fornecedores', NULL, CURRENT_TIMESTAMP(), CURRENT_TIMESTAMP());

SELECT * FROM categoria, unidades_medida, fabricantes, fornecedores ;