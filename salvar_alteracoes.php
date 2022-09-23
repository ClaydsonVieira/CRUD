<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> Alterar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <body> <h2>Alterar dados do aluno</h2>
     <div class="container"> 
        <?php
          
         include 'conexao.php';
        
        $codigo=$_POST["codigo"];
        $nome=$_POST["nome"];
        $nota=$_POST["nota"];
            
        $query=("UPDATE alunos SET nome='$nome',nota='$nota' WHERE codigo='$codigo'");
        mysqli_query($conexao,$query);
        mysqli_close($conexao);  
        
    ?>
         <div> Dados atualizados! </div>    
         <div> <a href="listar.php"> Listar alunos </a></div>
         <div><a href="index.html"> Voltar ao início</a></div>
    </div>
    </body>
</html> 



        
  

