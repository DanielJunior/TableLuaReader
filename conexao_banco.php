<?php
//ignore XD
//sudo apt-get install php5-mysqlnd
//sudo apt-get install php5-mysql

//abro a conexao com o bando de dados utilizando a extensão PDO
//está salvando no banco, mas não estava especificado no seu trabalho
//caso queira entrar a fundo na explicação, vale a pena pesquisar
$conexao = new mysqli("localhost", "root", "tzzk7662", "conversor_lua_db");
if ($conexao->connect_errno) {
    die("Erro de conexão com o banco". $conexao->connect_error);
}