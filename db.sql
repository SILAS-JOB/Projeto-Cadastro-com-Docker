CREATE DATABASE cadastro;

USE cadastro;

CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(40),
    telefone VARCHAR(20),
    local VARCHAR(50),
    contato VARCHAR(20)
);
