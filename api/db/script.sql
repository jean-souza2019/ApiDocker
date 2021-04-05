CREATE DATABASE
    IF NOT EXISTS apiteste;

USE apiteste;

CREATE TABLE
    IF NOT EXISTS produtos (
        id INT(11) AUTO_INCREMENT,
        name VARCHAR(255),
        price DECIMAL(10, 2),
        PRIMARY KEY (id)
    );


INSERT INTO produtos VALUES (0, 'Telefone Iphone 7', 3500);
INSERT INTO produtos VALUES (0, 'Notebook Lenovo', 8000);