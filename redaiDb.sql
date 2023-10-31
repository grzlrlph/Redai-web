create schema redaiDb;

use  redaiDb;

create table usuario(
    username varchar(45) not null,
    nome varchar (45) not null,
    email varchar(45) not null,
    senha varchar(45) not null,
    fotoPerfil blob, 
    tipoFoto text,
    primary key(username)
);