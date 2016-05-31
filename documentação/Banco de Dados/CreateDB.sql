CREATE TABLE pessoa(
	codigo int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50) not null,
    dataNascimento date not null,
    sexo varchar(15) not null,
    avatar varchar(100) not null,
    dtype varchar(20) not null,
    isDeleted boolean DEFAULT false
)