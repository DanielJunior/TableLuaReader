<h1>Resultado aqui</h1>

<?php
$arq = $_FILES['data']['tmp_name'];
echo file_get_contents($arq);
$temp = "json_format.json";
//rename($arq, $temp);
//header("Content-type: text/html; charset=utf-8");
//$json = file_get_contents($temp, 0, null, null);
//$json_output = json_decode($json);
//print_r($json_output);


