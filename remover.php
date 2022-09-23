<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Remover</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <?php

            include 'conexao.php';  

            $codrem=$_GET['codigo'];
 
 
            echo "<div>Tem certeza que deseja remover?</div>";
 
            echo "<div><a href = \"remocao.php?codigo=$codrem\"> Sim</a > </div>";
            echo "<div><a href = \"listar.php\">Não</a></div>";
 
 ?>
<div><a href="index.html">Voltar ao início</a></div>
        </div>
    </body>

</html>
