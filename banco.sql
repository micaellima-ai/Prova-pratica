CREATE DATABASE empresa_db;
use empresa_db;

CREATE TABLE funcionario(
    id int ,
    nome VARCHAR (100) NOT NULL,
    email VARCHAR (150) NOT NULL,
    salario DECIMAL(10,2) NOT NULL,
    tipo VARCHAR (30) NOT NULL
);