create database todolist;

use todolist;

create table lista(
	id int(10) primary key auto_increment,
    data_criacao date,
    prazo date,
    tarefa varchar(200)
);

insert into lista (id,data_criacao,prazo,tarefa) values (1,"2023-10-04","2023-10-17","Primeira Tarefa");

select * from lista;


