<?php

$conexao = mysql_connect("localhost", "root", "Luana1609");
if (!$conexao) {
    die("Erro de conexão com o banco de dados");
}
mysql_select_db("conversor_lua_db", $conexao);
