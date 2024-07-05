create database primeirocrud;
use primeirocrud;
create table client (
	id int primary key auto_increment,
    name varchar(40),
    email varchar(50),
    cpf varchar(13),
    birth date,
    phone varchar(20),
    address varchar(60)
    );