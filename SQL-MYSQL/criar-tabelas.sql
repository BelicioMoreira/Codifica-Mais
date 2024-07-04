USE gestao_produtos;

CREATE TABLE categoria (
    id BIGINT AUTO_INCREMENT, PRIMARY KEY (id),
    nome_categoria VARCHAR(255) NOT NULL, 
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP NOT NULL
);

CREATE TABLE unidades_medida (
    id BIGINT AUTO_INCREMENT, PRIMARY KEY (id),
    nome_categoria VARCHAR(255) NOT NULL, 
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP NOT NULL
);

CREATE TABLE fabricantes (
    id BIGINT AUTO_INCREMENT, PRIMARY KEY (id),
    nome_categoria VARCHAR(255) NOT NULL, 
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP NOT NULL
);

CREATE TABLE fornecedores (
    id BIGINT AUTO_INCREMENT, PRIMARY KEY (id),
    nome_categoria VARCHAR(255) NOT NULL, 
    deleted_at TIMESTAMP NULL,
    created_at TIMESTAMP NOT NULL,
    updated_at TIMESTAMP NOT NULL
);