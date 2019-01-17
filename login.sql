CREATE DATABASE loginConfucio;
CREATE TABLE Usuario(
	idUsuario INT NOT NULL AUTO_INCREMENT,
	nome VARCHAR(50) NOT NULL,
    sobrenome VARCHAR(50) NOT NULL,
	identidade INT NOT NULL,
	cpf INT NOT NULL,
    tel1 INT NOT NULL,
    tel2 INT NOT NULL,
    email VARCHAR(50) NOT NULL,
    turma VARCHAR(50) NOT NULL,
    nivel INT NOT NULL,
    senha VARCHAR(50) NOT NULL,
	status BOOLEAN,
	PRIMARY KEY (idUsuario)
);