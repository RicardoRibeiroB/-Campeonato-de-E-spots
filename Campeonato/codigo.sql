CREATE DATABASE if not exists cadastro default character set utf8 default collate utf8_general_ci;

CREATE TABLE if not exists timesCadastrados ( id INT NOT NULL AUTO_INCREMENT, nome VARCHAR(40) NOT NULL, nick VARCHAR(40) NOT NULL UNIQUE ,email VARCHAR(50) NOT NULL UNIQUE, primary key(id))default charset=utf8;