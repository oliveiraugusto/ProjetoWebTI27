CREATE DATABASE admquiz;

USE admquiz;

CREATE TABLE categoria
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    categoria varchar(255) NOT NULL UNIQUE
)

INSERT INTO categoria (categoria) VALUES ("ADMINISTRAÇÃO");
INSERT INTO categoria (categoria) VALUES ("RECURSOS HUMANOS");
INSERT INTO categoria (categoria) VALUES ("FINANÇAS");