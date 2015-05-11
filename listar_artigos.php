<?php

include './conexao_banco.php';
//consulta a ser feita
$query = sprintf("select * from artigos");
// executa a query 
$dados = mysqli_query($conexao, $query) or die(mysqli_connect_errno());
// transforma os dados em um array
$linha = mysqli_fetch_assoc($dados);
// calcula quantos dados retornaram 
$total = mysqli_num_rows($dados);

if ($total > 0) { // inicia o loop que vai mostrar todos os dados 
    echo "<ul>";
    do {
        echo "<li>";
        echo $linha['titulo'] . "- (<a href=" . $linha['link_artigo'] . ">artigo aceito</a>) ," .
        $linha['autores'] . ", " .
        $linha['evento'] . ",(<a href=" . $linha['link_evento'] . ">link do evento</a>) " .
        $linha['local'] . ", " .
        $linha['mes'] . ", " .
        $linha['ano'];
        echo "</li>";
    } while ($linha = mysqli_fetch_assoc($dados));
    echo "</ul>";
} else {
    echo "<h2>Não há artigos salvos.</h2>";
}
$conexao->close();
?>
