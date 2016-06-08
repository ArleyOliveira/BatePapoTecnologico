CREATE TABLE pessoa(
    codigo int AUTO_INCREMENT PRIMARY KEY,
    nome varchar(50) not null,
    dataNascimento date not null,
    sexo varchar(15) not null,
    avatar varchar(100) not null,
    dtype varchar(20) not null,
    isDeleted boolean DEFAULT false
)


--Falta tabela Usuario --

CREATE VIEW consultaUsuario AS
SELECT
  p.codigo, p.avatar, p.dataNascimento, p.dtype, p.nome, p.sexo, u.cpf, u.email, u.senha, u.isModerador, u.isAdmin
FROM
  pessoa p
JOIN
  usuario u ON p.codigo = u.codigo
WHERE
  !u.isDeleted !p.isDeleted;
