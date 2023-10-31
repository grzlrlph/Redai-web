create schema redaidb;
use redaidb;
create table usuario(
    username varchar(45) not null,
    nome varchar (45) not null,
    email varchar(45) not null,
    senha varchar(45) not null,
    fotoPerfil blob, 
    tipoFoto text,
    primary key(username)
);

create table publicacao(
	idPubli int auto_increment,
    dataHoraPubli datetime not null,
    nCurtidasPubli integer null,
    textoPubli text not null,
    nComentariosPubli integer,
    anexoPubli blob, 
    tipoFotoPubli varchar (45),
    categoria varchar (45) not null,
    username varchar(45) not null,
    primary key (idPubli),
    CONSTRAINT fk_username FOREIGN KEY (username) REFERENCES usuario (username)
    );
    
    
    

