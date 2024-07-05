ALTER TABLE produtos ADD CONSTRAINT fk_categoria FOREIGN KEY (categoria) REFERENCES categoria (id);
