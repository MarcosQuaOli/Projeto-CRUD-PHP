# Projeto-CRUD-PHP

Para visualizar o projeto é preciso:

Criar um Banco de dados com o nome 'tarefas';

criar a seguinte tabela:

CREATE TABLE tb_tarefas (
	id int not null PRIMARY KEY AUTO_INCREMENT,
    	tarefa varchar(100) not null   
);

OBS: Eu utilizei o banco de dados mysql, se for utilizar outro DB trocar no arquivo conexao.php
