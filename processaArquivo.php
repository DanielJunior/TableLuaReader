<h1>Resultado aqui</h1>

<?php
$arq = $_FILES['data']['tmp_name'];

$ponteiro = fopen($arq, "r");

while (!feof($ponteiro)) {

    $linha = fgets($ponteiro);
    $array = explode("=", $linha);
    echo $linha . "<br>";
    echo "AGORA O ARRAY<br>";
    echo $array[0]. "<br>";
}
fclose($ponteiro);

//echo file_get_contents($arq);
//$temp = "json_format.json";
//rename($arq, $temp);
//header("Content-type: text/html; charset=utf-8");
//$json = file_get_contents($temp, 0, null, null);
//$json_output = json_decode($json);
//print_r($json_output);


