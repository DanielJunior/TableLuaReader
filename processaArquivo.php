<?php

/* * esses comandos fazem algo no estilo copiar e colar.
  Ou seja, ele copia tudo que está nos arquivos especificados entre aspas e cola pra essa pagina.
  É importante dividir o codigo em varios arquivos para facilitar a manutenção!
 * */
include './insercao_banco.php';
include './funcoes_auxiliares.php';

//recupero o nome do arquivo que foi enviado pelo formulário preenchido(é um arquivo temporário)
$arquivo = $_FILES['data']['tmp_name'];
//abro o arquivo para leitura(por isso o "r") para conseguir manuseá-lo
$ponteiro_arquivo = fopen($arquivo, "r");
//crio um array vazio para guardar as informações que vou extrair de cada registro
$registro = array();
//enquanto o arquivo não tiver chegado ao final
while (!feof($ponteiro_arquivo)) {
    //leio uma linha
    $linha = fgets($ponteiro_arquivo);
    //se tiver um "=" na linha, eu a separo em duas: uma antes e outra depois do "="
    $array = explode("=", $linha);
    //se o array acima tiver 2 elementos, significa que eu tenho uma linha do tipo: titulo = "bla"
    if (count($array) > 1) {
        //função no arquivo funcoes_auxiliares.php
        formata_registro($registro, $array);
    }
    //se eu já consegui preencher um registro com todos seus atributos
    if (count($registro) == TAMANHO_REGISTRO) {
        //insiro no banco(função no arquivo insercao_banco.php)
        inserir($registro);
        //tenho que resetar o registro, para guardar um novo
        $registro = array();
    }
}
//fecho o arquivo que abri para leitura
fclose($ponteiro_arquivo);
//fecho a conexão com o banco de dados que abri(isso foi feito no arquivo insercao_banco.php)
$conexao->close();
//redireciono para a página que lista os artigos
header("Location: /artigos.php");
