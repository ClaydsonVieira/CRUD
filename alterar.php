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
        // pesquisar.php 

        
       include 'conexao.php';
       
        $codigo = $_GET["codigo"];

        mysqli_select_db($conexao, 'pronatectgk');
        $query=("Select * from alunos where codigo='".$codigo."'");
        $sql = mysqli_query($conexao, $query);
        $dados= mysqli_fetch_array($sql);
        
        $cod=$dados["codigo"];
        $nome=$dados["nome"];
        $nota=$dados["nota"]; 
        
        ?>
     
       <form method="post" action="salvar_alteracoes.php">
        <label>Código </label>
        <input type="text" readonly name="codigo" value="<?php echo $cod?>" /> <br><br>
        <label>Nome </label>
        <input type="text" name="nome" value="<?php echo $nome?>" /> <br><br>
        <label>Nota </label> 
        <input type="text" name="nota" value="<?php echo $nota?>" /><br><br>
        <input type="submit" value="Alterar" name="Alterar" />    
        </form> 
      
      
          <div><a href="listar.php"> Listar alunos </a></div>
          <div><a href="index.html"> Voltar ao início</a></div>
    
    </div>
    </body>
</html> 



        
  

