<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>PET - Engenharia de Telecomunicações da UFF</title>
        <link href="css/estilo.css" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <section class="centralizado">
            <?php
            include './header.php';
            ?>
            <h1>Bem-vindo ao conversor de arquivos tabelas Lua</h1>
            <div id="formulario">
                <form action="processaArquivo.php" method="post" 
                      enctype="multipart/form-data">
                    <input type="file" name="data" value="Adicionar arquivo"><br>
                    <input type="submit" value="Submit"/> 
                </form>
            </div>
        </section>
        <?php include './footer.php'; ?>
    </body>
</html>
