CREATE DATABASE admquiz;

USE admquiz;

CREATE TABLE categoria
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    categoria varchar(255) NOT NULL UNIQUE
)

INSERT categoria (categoria) VALUES ("ADMINISTRAÇÃO");
INSERT categoria (categoria) VALUES ("RECURSOS HUMANOS");
INSERT categoria (categoria) VALUES ("FINANÇAS");