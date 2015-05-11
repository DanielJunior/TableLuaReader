<?php
//incluo o arquivo que abre a conexão com o banco de dados
//essa inclusão que deixa a variavel $conexao disponivel para uso aqui
include './conexao_banco.php';

function inserir($registro) {
    //essa variavel eh da conexao com o banco, preciso da palavra global para torna-la disponivel
    //aqui dentro da função
    global $conexao;
    //uso do PDO, para preparar uma consulta
    $consulta_preparada = $conexao->prepare("insert into artigos(titulo,autores,evento,local,mes,ano,link_artigo,link_apresentacao,link_evento)"
            . "values(?,?,?,?,?,?,?,?,?)");
    //os 's' são os tipos das colunas do banco. Cada ? da linha acima é trocado pelo valor correspondente
    //na linha abaixo
    $consulta_preparada->bind_param('sssssssss', $registro['titulo'], $registro['autores'], $registro['evento'], $registro['local'], $registro['mes'], $registro['ano'], $registro['link_artigo'], $registro['link_apresentacao'], $registro['link_evento']);
    //executo a 'consulta'
    $consulta_preparada->execute();
    //fecho essa consulta
    $consulta_preparada->close();
}
