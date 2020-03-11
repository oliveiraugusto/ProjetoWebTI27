
USE admquiz;

CREATE TABLE usuarios
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    login varchar(255) NOT NULL UNIQUE,
    senha varchar (255) NOT NULL,
    cpf float(255) NOT NULL UNIQUE,
    telefone int (255) NOT NULL,
    acesso char NOT NULL 

)

INSERT INTO usuarios (login,senha,cpf,telefone) VALUES ("admin","123",1232344545,14996037848,"A");
INSERT INTO usuarios (login,senha,cpf,telefone) VALUES ("Felipeadmin","123",8932345545,14997587848,"G");
INSERT INTO usuarios (login,senha,cpf,telefone) VALUES ("Renanadmin","123123",5672344575,149960323248,"A");