
drop database agua;

create database agua;

use agua;

create table cliente(
    idcliente int primary key auto_increment,
    nome varchar(50),
    endereco varchar(70),
    telefone char(20) unique,
    marca varchar(20)
);

create table usuario(
    idusuario int primary key auto_increment,
    nome varchar(50),
    email varchar(50),
    login varchar(30) unique,
    senha varchar(32),
    perfil enum('adm','user')
);
create table pedidos(
    idpedido int primary key auto_increment,
    nome varchar(50),
    endereco varchar(70),
    telefone char(20),
    marca varchar(30),
    quantidade char(20),
    data TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP 
);

insert into usuario values(null,'Fernanda','fernanda@gmail.com','admfernanda',md5('123'),'adm');
insert into usuario values(null,'Marcelo','marcelo@gmail.com','marcelo',md5('abc'),'user');

select * from usuario;

-- md5() -> função para criptografar