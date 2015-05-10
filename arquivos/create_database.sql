--para usar este arquivo usar o comando mysql -u<usuario> -p < create_database.sql

create database IF NOT EXISTS conversor_lua_db;
use conversor_lua_db;
create table artigos(
id SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
titulo VARCHAR(50) NOT NULL,
autores VARCHAR(100) NOT NULL,
evento VARCHAR(50) NOT NULL,
local VARCHAR(30) NOT NULL,
mes VARCHAR(20) NOT NULL,
ano VARCHAR(30) NOT NULL,
link_artigo VARCHAR(100) NOT NULL,
link_apresentacao VARCHAR(100) NOT NULL,
link_evento VARCHAR(100) NOT NULL,
PRIMARY KEY(id)
);
