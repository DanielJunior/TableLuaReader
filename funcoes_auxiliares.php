<?php

define('TAMANHO_REGISTRO', 9);

function formata_registro(&$registro, $dados) {
    $chave = trim($dados[0], " ");
    $valor = trim(trim($dados[1]), ",");
    $registro[$chave] = $valor;
}
