<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Remoção</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
           <?php

            include 'conexao.php';  
 
            $codrem=$_GET['codigo'];
 
 
            $remove = "delete from alunos where codigo ='$codrem'";
            $result = mysqli_query($conexao, $remove);
 
            echo "<div>Aluno removido.</div>";
 
            ?>
<div><a href="index.html">Voltar ao início</a></div>
        </div>
    </body>

</html>



