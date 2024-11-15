CREATE DATABASE loja;
USE loja;

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    descricao TEXT,
    preco DECIMAL(10, 2),
    quantidade INT
);

INSERT INTO produtos (nome, descricao, preco, quantidade) VALUES
('Camiseta Básica', 'Camiseta de algodão', 49.90, 100),
('Calça Jeans', 'Calça jeans azul', 129.90, 50),
('Tênis Esportivo', 'Tênis para corrida', 299.99, 30),
('Relógio Digital', 'Relógio à prova d\'água', 199.90, 20),
('Mochila Escolar', 'Mochila com compartimentos', 89.90, 75);
