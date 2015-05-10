<?php

include './conexao_banco.php';

function inserir($registro) {
    global $conexao;
    $insere = "insert into artigos(titulo,autores,evento,local,mes,ano,link_artigo,link_apresentacao,link_evento)"
            . "values('" . $registro['titulo'] . "','" . $registro['autores'] . "','" . $registro['evento'] . "','" . $registro['local'] . "','" . $registro['mes'] . "','" . $registro['ano'] . "','" . $registro['link_artigo'] . "','" . $registro['link_apresentacao'] . "','" . $registro['link_evento'] . "')";
    mysql_query($insere, $conexao) or die("Não foi possível realizar a inserção!");
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

