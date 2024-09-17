CREATE DATABASE futebol;

USE futebol;

-- Tabela para Times
CREATE TABLE times (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL
);

-- Tabela para Jogadores
CREATE TABLE jogadores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    time_id INT,
    FOREIGN KEY (time_id) REFERENCES times(id) ON DELETE SET NULL
);
