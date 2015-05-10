<h1>Resultado aqui</h1>

<?php
include './insercao_banco.php';

$arq = $_FILES['data']['tmp_name'];
$ponteiro = fopen($arq, "r");
$registro = array();
while (!feof($ponteiro)) {
    $linha = fgets($ponteiro);
    $array = explode("=", $linha);
    if (count($array) > 1) {
        $chave = trim($array[0], " ");
        $valor = trim(trim($array[1]), ",");
        $registro[$chave] = $valor;
    }
    if (count($registro) == 9) {
        inserir($registro);
        $registro = array();
    }
}
fclose($ponteiro);
mysql_close($conexao);

header("Location: /artigos.php");
