USE admquiz;

CREATE TABLE jogador
(
    id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
    nome varchar (255) NOT NULL,
    cpf float (11) NOT NULL UNIQUE,
    telefone int (12) NOT NULL,
    telefone2 int (12),
    aluno varchar(4) NOT NULL,
    curso varchar(50) NOT NULL,
)

INSERT INTO jogador (nome, cpf, telefone, telefone2, aluno, curso) VALUES ("Marcos", 46491294862, 14998609309, "Sim", "Técnico em Informática");
INSERT INTO jogador (nome, cpf, telefone, telefone2, aluno, curso) VALUES ("Luiz", 11122233344, 14996328661, "Sim", "Técnico em Informática");
INSERT INTO jogador (nome, cpf, telefone, telefone2, aluno, curso) VALUES ("Ezequiel", 55566677788, 14996037848, "Sim", "Técnico em Informática");