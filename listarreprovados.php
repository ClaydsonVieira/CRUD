<!doctype html>
<html lang="pt-br">
    <head> 
        <title>Alunos Reprovados</title> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
<body> <h2> Lista de alunos reprovados: </h2> <br> 
    <div class="container">
<?php 
include 'conexao.php';  
 $consulta = "Select * From alunos where nota<60";
 $result = mysqli_query($conexao, $consulta);
 $nregistros = mysqli_num_rows($result);
 echo "Nº de registros encontrados: $nregistros ";
?>
<br> <table border="1"> 
<tr><td> Código: <td> Nome: <td> Nota: </tr> 
<?php
 for ($i=0; $i <$nregistros; $i++)  {
   $registro = mysqli_fetch_assoc($result);
   echo '<tr>';
   echo '<td>'.$registro['codigo'].'</td>';
   echo '<td>'.$registro['nome'].'</td>';
   echo '<td>'.$registro['nota'];
   echo '<td><a href = "alterar.php?codigo='.$registro['codigo'].'">Alterar</a>  <a href = "remover.php?codigo='.$registro['codigo'].'">Remover</a></td> ';
   echo '</tr>'; echo '</p>';
 }
?>
</table> <div><a href="index.html">Voltar ao início</a></div>
<div><a href="listar.php">Listar alunos</a></div>
<div> <a href="listaraprovados.php">Listar alunos aprovados</a></div>
    
</div>
</body>
</html>
